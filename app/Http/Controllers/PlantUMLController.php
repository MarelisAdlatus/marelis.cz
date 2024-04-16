<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PlantUMLController extends Controller
{
    public function GenerateFromFile(Request $request) {
        
        $request->validate([
            'format' => 'required|string',
            'path' => 'required|string'
        ]);
        
        $file = public_path($request->path);

        if (File::missing($file)) {
            return response()->json([
                'message' => 'File not found.'
            ], 404);
        }

        $content = File::get($file);

        $server = env('PLANTUML_SERVER', 'https://www.plantuml.com/plantuml');
        $response = Http::get(sprintf('%s/%s/%s', $server, $request->format, $this->encode64(gzdeflate($content, 9))));

        if ( ! $response->successful()) {
            return response()->json([
                'message' => 'Response not successful.'
            ], 404);
        }

        $svg = $response->body();
        $tag = '<img src="data:image/' . $request->format . '+xml;base64,' . base64_encode($svg) . '" style="max-width: 100%; height: auto;">';
        return $tag;
    }

    private function encode6bit($b) {
        if ($b < 10) { return chr(48 + $b); }
        $b -= 10;
        if ($b < 26) { return chr(65 + $b); }
        $b -= 26;
        if ($b < 26) { return chr(97 + $b); }
        $b -= 26;
        if ($b == 0) { return '-'; }
        if ($b == 1) { return '_'; }
        return '?';
    }
   
    private function append3bytes($b1, $b2, $b3) {
        $c1 = $b1 >> 2;
        $c2 = (($b1 & 0x3) << 4) | ($b2 >> 4);
        $c3 = (($b2 & 0xF) << 2) | ($b3 >> 6);
        $c4 = $b3 & 0x3F;
        $r = "";
        $r .= $this->encode6bit($c1 & 0x3F);
        $r .= $this->encode6bit($c2 & 0x3F);
        $r .= $this->encode6bit($c3 & 0x3F);
        $r .= $this->encode6bit($c4 & 0x3F);
        return $r;
    }
   
    private function encode64($c) {
        $str = "";
        $len = strlen($c);
        for ($i = 0; $i < $len; $i+=3) {
               if ($i+2==$len) {
                     $str .= $this->append3bytes(ord(substr($c, $i, 1)), ord(substr($c, $i+1, 1)), 0);
               } else if ($i+1==$len) {
                     $str .= $this->append3bytes(ord(substr($c, $i, 1)), 0, 0);
               } else {
                     $str .= $this->append3bytes(ord(substr($c, $i, 1)), ord(substr($c, $i+1, 1)),
                         ord(substr($c, $i+2, 1)));
               }
        }
        return $str;
    }
}
