<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK

require_once _PATH . 'lib/twilio-php-main/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

class Twilio {
    
    public function sendSMS($to_number, $message) {
        
        // Your Account SID and Auth Token from twilio.com/console
        
        $client = new Client(ACCOUNT_SID, AUTH_TOKEN);
        // Use the client to do fun stuff like send text messages!
        
        try {
            $client->messages->create(
                // the number you'd like to send the message to
                $to_number,
                [
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => TWILIO_FROM_NO,
                    // the body of the text message you'd like to send
                    'body' => $message
                ]
            );
            return array("status" => true);
        } catch (Exception $e) {
            return array("status" => false, "message" => $e->getMessage());
        }
    }
}