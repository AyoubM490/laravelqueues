<?php

namespace App\Jobs;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

//    public $timeout = 1; // not working on windows, it needs pcntl
//    public $tries = -1; // unlimited retries
//    public $backoff = 2; // wait 2 seconds between each retry
    public $tries = 10;
    public $maxExceptions = 2;
//    public $backoff = [2, 10, 20];

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        throw new Exception('failed!');

        return $this->release(2);
    }

    public function failed($e)
    {
        info('Failed!');
    }

//    public function retryUntil() // retries
//    {
//        return now()->addMinute();
//    }
}
