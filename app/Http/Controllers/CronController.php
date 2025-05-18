<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;

class CronController extends Controller
{
    public function processQueueJob(Request $request, $queue)
    {
        // Ověření klíče z URL
        if ($request->input('key') !== env('CRON_KEY')) {
            abort(403, 'Unauthorized');
        }

        // Spuštění jobu ve specifikované frontě
        Artisan::call('queue:work', [
            '--once' => true,
            '--queue' => $queue,
        ]);

        return ucfirst($queue) . ' queue job processed.';
    }
}
