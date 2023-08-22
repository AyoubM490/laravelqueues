<?php

use App\Jobs\TestJob;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    SendWelcomeEmail::dispatch()->delay(5);
//    SendWelcomeEmail::dispatch();
//    foreach (range(1, 100) as $i) {
//        SendEmail::dispatch();
//    }
//    sendEmail::dispatch();
//
//    ProcessPayment::dispatch()->onQueue('payments');
//    $batch = [
//        new PullRepo('laracasts/project1'),
//        new PullRepo('laracasts/project2'),
//        new PullRepo('laracasts/project3'),
//    ];

//    $batch = [
//        [
//            new PullRepo('laracasts/project1'),
//            new RunTests('laracasts/project1'),
//            new Deploy('laracasts/project1')
//        ],
//        [
//            new PullRepo('laracasts/project2'),
//            new RunTests('laracasts/project2'),
//            new Deploy('laracasts/project2')
//        ],
//    ];
//
//    Bus::batch($batch)
//        ->allowFailures()
////        ->catch(function ($batch, $e) {
////            //
////        })
////        ->then(function ($batch) {
////            //
////        })
////        ->finally(function ($batch) {
////
////        })
////        ->onQueue('deployments')
////        ->onConnection('database')
//        ->dispatch();
//    Bus::chain([
//        new Deploy(),
//        function () {
//            Bus::batch([
//                [
//                    new PullRepo('laracasts/project1'),
//                    new RunTests('laracasts/project1'),
//                    new Deploy('laracasts/project1')
//                ],
//                [
//                    new PullRepo('laracasts/project2'),
//                    new RunTests('laracasts/project2'),
//                    new Deploy('laracasts/project2')
//                ],
//            ])->dispatch();
//        }
//    ])->dispatch();
//    $user = User::factory()->create();
//
////    Deploy::dispatch();
////    Deploy::dispatch();
//    SendEmail::dispatch($user)->afterCommit();

    TestJob::dispatch('THIS_IS_THE_SECRET');

    return view('welcome');
});
