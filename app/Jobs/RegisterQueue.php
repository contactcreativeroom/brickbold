<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class RegisterQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    /**
     * Create a new job instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try{ 
            Mail::send('emails.front.register', $this->details, function($message){
                $message->from(config('constants.EMAIL.from'), config('constants.BUSINESS.name'));
                $message->subject(config('constants.BUSINESS.name').' - Registration Successfully');
                $message->to($this->details['email']);
            });            
        }
        catch(\Exception $e){
            print '<pre>'; print_r($e->getMessage()); die;
        }
    }
}
