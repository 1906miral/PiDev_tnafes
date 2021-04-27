<?php

require "vendor/autoload.php";
use Twilio\Rest\Client;

$account_sid = "ACcff26097e60f12279cd1cb1a72b05f37";
$auth_token = "2589c832952f2a96b22090f98f555a5f";
$twilio_phone_number = "+14049238177";

$client = new Client($account_sid, $auth_token);

$client->messages->create(
    'DESTINATION_PHONE_NUMBER',
    array(
        "from" => $twilio_phone_number,
        "body" => "Whaddup from PHP!"
    )
);