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
        ]);
        
        // The SplFileInfo class
        // https://www.php.net/manual/en/class.splfileinfo.php

        $files = File::files(public_path($request->path));

        $result = array();

        $result[] = ([
            "name" => trans('app.download_table_name'),
            "size" => trans('app.download_table_size'),
            "url" => trans('app.download_table_action'),
        ]);

        foreach($files as $file) {
            $result[] = ([
                "name" => $file->getFilename(),
                "size" => Number::fileSize($file->getSize()),
                "url" => sprintf('%s/%s', asset($request->path), $file->getFilename()),
            ]);
        }

        return response()->json($result);
    }
}
