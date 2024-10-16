<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Number;

class DownloadController extends Controller
{
    public function DownloadList(Request $request) {
        
        $request->validate([
            'path' => 'required|string',
            'pattern' => 'nullable|string',
        ]);
        
        // The SplFileInfo class
        // https://www.php.net/manual/en/class.splfileinfo.php
        
        $path = public_path($request->path);
        
        if ($request->has('pattern')) {
            $patterns = explode(';', $request->pattern);
            $files = [];
            foreach ($patterns as $pattern) {
                $files = array_merge($files, File::glob($path . DIRECTORY_SEPARATOR . trim($pattern)));
            }
        } else {
            $files = File::files($path);
        }

        $result = array();

        $result[] = ([
            "name" => trans('app.download_table_name'),
            "size" => trans('app.download_table_size'),
            "url" => trans('app.download_table_action'),
        ]);

        foreach($files as $file) {
            $fileInfo = new \SplFileInfo($file);
            $result[] = ([
                "name" => $fileInfo->getFilename(),
                "size" => Number::fileSize($fileInfo->getSize()),
                "url" => sprintf('%s/%s', asset($request->path), $fileInfo->getFilename()),
            ]);
        }

        return response()->json($result);
    }
}
