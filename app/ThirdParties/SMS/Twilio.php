<?php
namespace App\ThirdParties\SMS;

use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class Twilio implements SMSInterface {
    private Client $client ;
    private string  $senderNumber;
    public function __construct()
    {
        $accountSid = trim(env("TWILIO_SID"));
        $authToken = trim(env("TWILIO_AUTH_TOKEN"));
        $this->senderNumber = trim(env("TWILIO_NUMBER"));
        $this->client = new Client($accountSid ,$authToken);
    }

    public function sendOneMessage(string $message ,string $phoneNumber):string{
        try {
            return $this->client->messages->create(
                $phoneNumber,
                [
                    'from' => $this->senderNumber,
                    'body' => $message
                ]
            );
        }catch (TwilioException $exception){
            return $exception;
        }
    }

    public function sendBulkOfMessages(string $message, array $phoneNumbers): array
    {
        $result = [];
        foreach ($phoneNumbers as $phoneNumber){
            $result[$phoneNumber] = $this->sendOneMessage($message ,$phoneNumber);
        }
        return [
            "numbers" => $result
        ];
    }
}
