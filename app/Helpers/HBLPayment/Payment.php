<?php

namespace App\Helpers\HBLPayment;

use Carbon\Carbon;
// use App\Helpers\SecurityData;
use App\Helpers\SecurityData;
use App\Helpers\ActionRequest;
use GuzzleHttp\Exception\GuzzleException;


class Payment extends ActionRequest
{
    private ?string $orderNo = null;
    private ?string $amount = null;
    private ?string $productDescription = null;
    private ?string $amountText = null;
    private ?string $currencyCode = null;
    private ?string $officeId = null;
    private ?string $encryptCode = null;

    public function __construct($orderNo, $amount, $productDescription, $amountText, $currencyCode, $officeId, $encryptCode)
    {
        $this->orderNo = $orderNo;
        $this->amount = $amount;
        $this->productDescription =  $productDescription;
        $this->amountText = $amountText;
        $this->currencyCode = $currencyCode;
        $this->officeId = $officeId;
        $this->encryptCode = $encryptCode;

        $this->accessToken = config('app.addons.payment_options.hbl')[env('HBL_ENV')]['access_token'][$this->currencyCode];
        parent::__construct();
    }

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public function ExecuteJose()
    { 
        $now = Carbon::now();
        $access_token = $this->accessToken;
        $request = [
            "apiRequest" => [
                "requestMessageID" => $this->Guid(),
                "requestDateTime" => $now->utc()->format('Y-m-d\TH:i:s.v\Z'),
                "language" => "en-US",
            ],
            "officeId" => "{$this->officeId}",
            "orderNo" => "{$this->orderNo}",
            "productDescription" => "{$this->productDescription}",
            "paymentType" => "CC",
            "paymentCategory" => "ECOM",            
            "storeCardDetails" => [
                "storeCardFlag" => "N",
                "storedCardUniqueID" => "{{guid}}"
            ],
            "installmentPaymentDetails" => [
                "ippFlag" => "N",
                "installmentPeriod" => 0,
                "interestType" => null
            ],
            "mcpFlag" => "N",
            "request3dsFlag" => "Y",
            "transactionAmount" => [
                "amountText" => "{$this->amountText}",
                "currencyCode" => "{$this->currencyCode}",
                "decimalPlaces" => 2,
                "amount" => $this->amount
            ],
            "notificationURLs" => [
                "confirmationURL" => route('result.success', $this->encryptCode),
                "failedURL" => route('result.failed'),
                "cancellationURL" => route('result.cancellation'),
                "backendURL" => route('result.backend')
            ],
            "deviceDetails" => [
                "browserIp" => "1.0.0.1",
                "browser" => "Postman Browser",
                "browserUserAgent" => "PostmanRuntime/7.26.8 - not from header",
                "mobileDeviceFlag" => "N"
            ],
            "purchaseItems" => [
                [
                    "purchaseItemType" => "ticket",
                    "referenceNo" => "2322460376026",
                    "purchaseItemDescription" => "Bundled insurance",
                    "purchaseItemPrice" => [
                        "amountText" => "000000000100",
                        "currencyCode" => "NPR",
                        "decimalPlaces" => 2,
                        "amount" => 1
                    ],
                    "subMerchantID" => "string",
                    "passengerSeqNo" => 1
                ]
            ],
            "customFieldList" => [
                [
                    "fieldName" => "TestField",
                    "fieldValue" => "This is test"
                ]
            ]
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
        $signingKey = $this->GetPrivateKey(SecurityData::$MerchantSigningPrivateKey);
        $encryptingKey = $this->GetPublicKey(SecurityData::$PacoEncryptionPublicKey);
        $body = $this->EncryptPayload($stringPayload, $signingKey, $encryptingKey);
        
        //third-party http client https://github.com/guzzle/guzzle
        $response = $this->client->post('api/1.0/Payment/prePaymentUI', [
            'headers' => [
                'Accept' => 'application/jose',
                'CompanyApiKey' => $access_token,
                'Content-Type' => 'application/jose; charset=utf-8'
            ],
            'body' => $body
        ]);
        $token = $response->getBody()->getContents();
        $decryptingKey = $this->GetPrivateKey(SecurityData::$MerchantDecryptionPrivateKey);
        $signatureVerificationKey = $this->GetPublicKey(SecurityData::$PacoSigningPublicKey);

        return $this->DecryptToken($token, $decryptingKey, $signatureVerificationKey);
    }
    
}