<?php

namespace App\Jobs;

use App\Models\Site;
use Exception;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\Middleware\ThrottlesExceptions;
use Illuminate\Queue\Middleware\WithoutOverlapping;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class Deploy implements ShouldQueue //, ShouldBeUniqueUntilProcessing
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $container;
    public $site;
    public $latestCommitHash;

    /**
     * Create a new job instance.
     */
    public function __construct(Site $site, $latestCommitHash)
    {
//        $this->container = $container;
        $this->site = $site;
        $this->latestCommitHash = $latestCommitHash;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
//        $this->container->make('deployer')
//            ->deploy(
//                $this->site->latestCommitHash()
//            );
//        app()->make('deployer')
//            ->deploy(
////                $this->site->latestCommitHash()
//                $this->latestCommitHash
//            );
//        Redis::funnel('deployments')
//            ->limit(5)
//            ->block(10)
//            ->then(function () {
//                info('Started Deploying...');
//                sleep(5);
//                info('Finished Deploying!');
//            });

//        Redis::throttle('deployments') // rate limiting
//            ->allow(10)
//            ->every(60)
//            ->block(10)
//            ->then(function () {
//                info('Started Deploying...');
//                sleep(5);
//                info('Finished Deploying!');
//            });
//        throw new Exception('failed!');
//        info('Started Deploying...');
//        sleep(5);
//        info('Finished Deploying!');

//        Cache::lock('deployments')->block(10, function() { // using cache
//            info('Started Deploying...');
//            sleep(5);
//            info('Finished Deploying!');
//        });

    }

//    public function uniqueId()
//    {
//        return 'deployments';
//    }
//
//    public function uniqueFor()
//    {
//        return 60;
//    }
//
//    public function middleware()
//    {
//        return [
////            new WithoutOverlapping('deployments', 10)
//        new ThrottlesExceptions(10)
//        ];
//    }
}
