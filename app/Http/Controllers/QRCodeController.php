<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function GenerateFromText(Request $request) {
        
        $request->validate([
            'format' => 'required|string',
            'size' => 'required|numeric',
            'margin' => 'required|numeric',
            'encoding' => 'required|string',
            'text' => 'required|string'
        ]);
        
        $data = base64_decode($request->text);

        $qrcode = QrCode::format($request->format)
            ->size($request->size)
            ->margin($request->margin)
            ->encoding($request->encoding)
            ->backgroundColor(255, 255, 255)
            ->generate($data);

        $tag = '<img src="data:image/' . $request->format . '+xml;base64,' . base64_encode($qrcode) . '">';

        return $tag;
    }
}
