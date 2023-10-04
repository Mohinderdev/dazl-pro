<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use App\ThirdParties\SMS\Twilio;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendMAIL implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private array $emails;
    private SendEmail $sendEmail;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $emails ,$emailInstance)
    {
        $this->emails = $emails;
        $this->sendEmail = $emailInstance;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $responses = [];
        foreach ($this->emails as $email){
            $responses[$email] = \Mail::to($email)
                ->send($this->sendEmail);
        }

        \Log::debug("This is logs from the bulk sending " .json_encode($responses));
    }
}
