<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function SoftwareLatest(Request $request, string $item) {

        $lang = app()->getLocale();
        // version for show
        $version = config('settings.software.' .  $item . '.show_version');
        $path = $lang . '.software.' . $item . '.' . $version;

        return view($path . '.index', compact('path'));
    }

    public function SoftwareVersion(Request $request, string $item, string $version) {

        $lang = app()->getLocale();
        $path = $lang . '.software.' . $item . '.' . $version;

        return view($path . '.index', compact('path'));
    }

    public function HardwareLatest(Request $request, string $item) {

        $lang = app()->getLocale();
        // version for show
        $version = config('settings.hardware.' .  $item . '.show_version');
        $path = $lang . '.hardware.' . $item . '.' . $version;

        return view($path . '.index', compact('path'));
    }

    public function HardwareVersion(Request $request, string $item, string $version) {

        $lang = app()->getLocale();
        $path = $lang . '.hardware.' . $item . '.' . $version;

        return view($path . '.index', compact('path'));
    }

    public function ModelLatest(Request $request, string $item) {

        $lang = app()->getLocale();
        // version for show
        $version = config('settings.model.' .  $item . '.show_version');
        $path = $lang . '.model.' . $item . '.' . $version;

        return view($path . '.index', compact('path'));
    }

    public function ModelVersion(Request $request, string $item, string $version) {

        $lang = app()->getLocale();
        $path = $lang . '.model.' . $item . '.' . $version;

        return view($path . '.index', compact('path'));
    }

    public function ProjectLatest(Request $request, string $item) {

        $lang = app()->getLocale();
        // version for show
        $version = config('settings.project.' .  $item . '.show_version');
        $path = $lang . '.project.' . $item . '.' . $version;

        return view($path . '.index', compact('path'));
    }

    public function ProjectVersion(Request $request, string $item, string $version) {

        $lang = app()->getLocale();
        $path = $lang . '.project.' . $item . '.' . $version;

        return view($path . '.index', compact('path'));
    }
}
