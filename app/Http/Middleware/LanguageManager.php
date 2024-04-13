<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App;

class LanguageManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        } else {
            $availableLocales = config('settings.available_locales');
            $lang = $request->getPreferredLanguage($availableLocales);
            if ($lang) {
                session()->put('locale', $lang);
            } else {
                // default
                session()->put('locale', env('APP_LOCALE', 'en')); 
            }
            App::setLocale(session()->get('locale'));
        }

        return $next($request);
    }
}
