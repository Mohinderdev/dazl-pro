<?php

namespace App\Jobs;

use App\ThirdParties\SMS\Twilio;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $message;
    private array $phoneNumbers;
    private Twilio $twilio;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $message ,array $phoneNumbers)
    {
        $this->message = $message;
        $this->phoneNumbers = $phoneNumbers;
        $this->twilio = new Twilio();
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $messagesResult = $this->twilio->sendBulkOfMessages($this->message ,$this->phoneNumbers);
        \Log::debug("This is logs from the bulk sending " .json_encode($messagesResult));
    }
}
