<?php

namespace App\Http\Controllers\Frontend;

use Mail;
use Swift_Mailer;
use Swift_SmtpTransport;
use App\Models\PaymentHBL;
use App\Models\PaymentEntry;

use App\Models\PaymentSetup;
use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\HblPaymentResponse;


use App\Helpers\HBLPayment\Inquiry;
use App\Http\Controllers\Controller;
use App\Models\HblPaymentResultResponse;
use App\Notifications\SendPaymentErrorLog;
use Illuminate\Support\Facades\Notification;

class ResultController extends Controller
{
    private $response;
    public function __construct(Request $request)
    {
        $has_data = HblPaymentResultResponse::where('order_no', $request->orderNo)->first();
        if (isset($request->orderNo) and is_null($has_data)) {
            $order_details = HblPaymentResponse::where('order_no', $request->orderNo)->first();
            $inquiry = new Inquiry($order_details->currency);
            $this->response = $inquiry->ExecuteJose(config('app.addons.payment_options.hbl')[env('HBL_ENV')]['merchant_id'], $request->orderNo);
            if ($this->response) {
                HblPaymentResultResponse::_save_response($this->response);
            }
        }
    }

    public function success($encrypt)
    {
        $check = PaymentSetup::_validating($encrypt);
        if ($check['status'] == 200) {
            $detail = $check['detail'];
            return view('frontend.result.success_summary', compact('detail'));
        }
        return redirect()->route('result.error', ['trans-ref-invalid']);
    }

    public function failed()
    {
        return view('frontend.result.failed');
    }

    public function error($code)
    {
        return view('frontend.result.error', compact('code'));
    }

    public function cancellation(Request $request)
    {
        return view('frontend.result.cancellation');
    }
    
    public function test()
    {
        $notify = [
            'client' => 'testing',
            'title' => 'testing',
            'action' => 'testing',
            'error_log' => 'testing'
        ];
        
        $backup = Mail::getSwiftMailer();
        // set mailing configuration
        $transport = new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls');
        $transport->setUsername('pantharish120@gmail.com');
        $transport->setPassword('pcdkpizkhiaxtxez');
        $mailtrap = new Swift_Mailer($transport);
        Mail::setSwiftMailer($mailtrap);
            
        Notification::route('mail', 'naturalfiber@gmail.com')->notify(new SendPaymentErrorLog($notify));
        Mail::setSwiftMailer($backup);
        return "Email was sent!";
    }
}
