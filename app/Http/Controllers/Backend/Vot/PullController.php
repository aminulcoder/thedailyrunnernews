<?php

namespace App\Http\Controllers\Backend\Vot;

use App\Http\Controllers\Controller;
use App\Models\Pull;
use Illuminate\Http\Request;

class PullController extends Controller


{

    function __construct()
    {
        $this->middleware('admin');
    }
    public function pullcreate(){

        // return view('')
    }

    public function pullstore(Request $request)
    {
        $userid    = $request->user()->id;
        $ipAddress = request()->ip();

        Pull::create([
            'vot_id'     => $request->vot_id,
            'yes'        => $request->yes,
            'no'         => $request->no,
            'no_comment' => $request->no_comment,
            'ip_address' => $ipAddress,
            'user_id'    => $userid,

        ]);
    }
}
