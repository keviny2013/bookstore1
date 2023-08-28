<?php
require _PATH . 'vendor/autoload.php';
use Twilio\Rest\Client;

class TwilioSendSms
{

    public function __construct()
    {

    }

    public function sendSMS($number = '', $message = '')
    {

        $account_sid   = 'AC0131866204574fc1010112ee92666c48';
        $auth_token    = 'cf01ef155e1dfb47e4dc881c04aa5f7b';
        $twilio_number = "+17695535593";

        $client = new Client($account_sid, $auth_token);
        $result = $client->messages->create(
            $number,
            array(
                'from' => $twilio_number,
                'body' => $message,
            )
        );
        if (!empty($result->sid)) {
            return true;
        } else {
            return false;
        }
    }
}
