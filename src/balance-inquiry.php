<?php class BalanceInquiry {
  function __construct($host=false){
    $this->host = ($host)?"production.bankmandiri.co.id":"sandbox.bankmandiri.co.id";
    $this->url = 'https://'.$this->host.'/openapi/customers/v2.0/balance-inquiry';
  }
  function headers($token,$timestamp,$sign,$partner,$external,$channel){
    return [
      "Authorization" => "Bearer $token",
      "Content-Type" => "application/json",
      "X-TIMESTAMP" => $timestamp, // FORMAT: yyyy-MM-ddTHH:mm:ssTZD
      "X-SIGNATURE" => $sign, //Transaction signature. Please refer to Transaction Signature section
      "X-PARTNER-ID" => $partner, //Partner ID given by Mandiri upon onboarding process String(16)
      "X-EXTERNAL-ID" => $external, //Numeric String. Unique ID per request generated by partner String(19)
      "CHANNEL-ID" => $channel //Channel ID from partner Number(5)
    ];
  }
  function body($no){
    return ["accountNo"=>$no];
  }
  function request(){
    $headers = $this->headers();
    $body = $this->body();
    $request = new Request('HEAD', $this->url, $headers, $body);
    $promise = $client->sendAsync($request);
    $promise = $client->requestAsync('POST', $this->url);
    $promise->then(
      function (ResponseInterface $res) {
          echo $res->getStatusCode() . "\n";
      },
      function (RequestException $e) {
          echo $e->getMessage() . "\n";
          echo $e->getRequest()->getMethod();
      }
    );
  }
}