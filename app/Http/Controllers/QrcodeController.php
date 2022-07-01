<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{
    public function index(Request $request)
    {
        $filename = $request->id.'.svg';
        $qrcode =  QrCode::format('svg')->generate($request->link, storage_path('app/public/'.$filename));

        $id = $request->id;
        return view('frontend.qrcode', compact('id'));

    }
}
