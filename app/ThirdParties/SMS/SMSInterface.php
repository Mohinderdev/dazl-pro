<?php
namespace App\ThirdParties\SMS;

interface SMSInterface{
    public function sendOneMessage(string $message ,string $phoneNumber):string ;
    public function sendBulkOfMessages(string $message ,array $phoneNumbers):array;
}
