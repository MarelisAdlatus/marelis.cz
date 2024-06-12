<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class SitemapController extends Controller
{
    public function index()
    {
        return Cache::remember('sitemap', now()->addDay(), function () {

            $urls = [];

            foreach (config('settings.software') as $key => $value) {
                $urls[] = $key;
            }
    
            foreach (config('settings.hardware') as $key => $value) {
                $urls[] = $key;
            }
    
            foreach (config('settings.model') as $key => $value) {
                $urls[] = $key;
            }
    
            foreach (config('settings.project') as $key => $value) {
                $urls[] = $key;
            }
    
            $content = View::make('layouts.sitemap', compact('urls'))->render();
    
            return response($content, 200, [
                'Content-Type' => 'application/xml'
            ]);
    
        });
    }
}
