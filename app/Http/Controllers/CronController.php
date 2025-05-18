<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class CronController extends Controller
{
    public function processQueueJob(Request $request, $queue)
    {
        // Verifying a key from a URL
        if ($request->input('key') !== env('CRON_KEY')) {
            abort(403, 'Unauthorized');
        }

        // Running a job in a specified queue
        Artisan::call('queue:work', [
            '--once' => true,
            '--queue' => $queue,
        ]);

        return ucfirst($queue) . ' queue job processed.';
    }

    public function runSchedule(Request $request)
    {
        // Verifying a key from a URL
        if ($request->input('key') !== env('CRON_KEY')) {
            abort(403, 'Unauthorized');
        }

        // Running 'schedule:run'
        Artisan::call('schedule:run');

        return 'Scheduled tasks have been run.';
    }
}
