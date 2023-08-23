<?php

namespace App\Helpers\HBLPayment;

use Carbon\Carbon;
use App\Helpers\SecurityData;
use App\Helpers\ActionRequest;
use GuzzleHttp\Exception\GuzzleException;

class Inquiry extends ActionRequest
{
    public function __construct($currencyCode)
    {
        $this->accessToken = config('app.addons.payment_options.hbl')[env('HBL_ENV')]['access_token'][$currencyCode];
        parent::__construct();
    }
    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public function ExecuteJose($officeId, $orderNo): string
    {
        $access_token = $this->accessToken;
        $now = Carbon::now();
        
        $request = [
            "apiRequest" => [
                "requestMessageID" => $this->Guid(),
                "requestDateTime" => $now->utc()->format('Y-m-d\TH:i:s.v\Z'),
                "language" => "en-US",
            ],
            "advSearchParams" => [
                "controllerInternalID" => null,
                "officeId" => [
                    $officeId
                ],
                "orderNo" => [
                    $orderNo
                ],
                "invoiceNo2C2P" => null,
                "fromDate" => "0001-01-01T00:00:00",
                "toDate" => "0001-01-01T00:00:00",
                "amountFrom" => null,
                "amountTo" => null
            ],
        ];

        $payload = [
            "request" => $request,
            "iss" => $access_token,
            "aud" => "PacoAudience",
            "CompanyApiKey" => $access_token,
            "iat" => $now->unix(),
            "nbf" => $now->unix(),
            "exp" => $now->addHour()->unix(),
        ];

        $stringPayload = json_encode($payload);
        $signingKey = $this->GetPrivateKey(config('app.addons.payment_options.hbl')[env('HBL_ENV')]['merchant_signing_private_key']);
        $encryptingKey = $this->GetPublicKey(config('app.addons.payment_options.hbl')[env('HBL_ENV')]['paco_encryption_public_key']);

        $body = $this->EncryptPayload($stringPayload, $signingKey, $encryptingKey);

        //third-party http client https://github.com/guzzle/guzzle
        $response = $this->client->post('api/1.0/Inquiry/transactionList', [
            'headers' => [
                'Accept' => 'application/jose',
                'CompanyApiKey' => $access_token,
                'Content-Type' => 'application/jose; charset=utf-8'
            ],
            'body' => $body
        ]);

        $token = $response->getBody()->getContents();
        $decryptingKey = $this->GetPrivateKey(config('app.addons.payment_options.hbl')[env('HBL_ENV')]['merchant_decryption_private_key']);
        $signatureVerificationKey = $this->GetPublicKey(config('app.addons.payment_options.hbl')[env('HBL_ENV')]['paco_signing_public_key']);

        return $this->DecryptToken($token, $decryptingKey, $signatureVerificationKey);
    }

}