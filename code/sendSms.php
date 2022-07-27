<?php

require  '../vendor/autoload.php';


use Twilio\Rest\Client;

function sens_sms($to,$message){
    
    $sid = 'ACd2eeec6241abcda8f4a6f3cf448e7584';
    $token = 'b22626f036288e923da1af946102eeac';
    $client = new Client($sid, $token);
    $client->messages->create(
        $to,
        [
            'from' => '+12563968930',
            // the body of the text message you'd like to send
            'body' => $message
        ]
    );
}

