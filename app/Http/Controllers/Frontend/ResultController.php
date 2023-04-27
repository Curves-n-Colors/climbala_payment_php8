<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PaymentDetail;
use App\Models\PaymentEntry;
use App\Models\PaymentHBL;
use Illuminate\Http\Request;

use App\Models\PaymentSetup;
use Mail;
use Swift_SmtpTransport;
use Swift_Mailer;


use Illuminate\Support\Facades\Notification;
use App\Notifications\SendPaymentErrorLog;

class ResultController extends Controller
{
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
