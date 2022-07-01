<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pull;
use App\Models\Vot\Vot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxvotController extends Controller
{
    public function index()
    {
        $data =  view('frontend.inc.ajaxvot')->render();
        return  $data;
    }

    public function updateOnlineVot(Request $request){

       if($request->ajax()){

        // return $request->all();

        $userid = null;
        // $userid= Auth::user()->id;

        // $ipaddress = $request 

        if ($request->vot == 'yes') {
            Pull::create([
                'vot_id' => $request->id,
                'user_id' => $userid,
                'yes' => 1,
                'ip_address' => $request->ip(),
            ]);
            return 'vot update';
        }
        if ($request->vot == 'no') {
            Pull::create([
                'vot_id' => $request->id,
                'user_id' => $userid,
                'no' => 1,
                'ip_address' => $request->ip(),
            ]);
            return 'vot update';
        }
        if ($request->vot == 'no_comment') {
            Pull::create([
                'vot_id' => $request->id,
                'user_id' => $userid,
                'no_comment' => 1,
                'ip_address' => $request->ip(),
            ]);
            return 'vot update';
        }
        // if ($request->vot == 'no') {
        //     Vot::where('id', $request->id)->increment('no');
        //     Vot::where('id', $request->id)->increment('total_vot');
        //     // return redirect()->back();
        // }
        // if ($request->vot == 'no_comment') {
        //     Vot::where('id', $request->id)->increment('no_comment');
        //     Vot::where('id', $request->id)->increment('total_vot');
        //     // return redirect()->back();
        // }

        // return "vot update";



       }
    }
}
