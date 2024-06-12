<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearSitemapCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear sitemap cache';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::forget('sitemap');
        $this->info('Sitemap cache cleared.');
    }
}
