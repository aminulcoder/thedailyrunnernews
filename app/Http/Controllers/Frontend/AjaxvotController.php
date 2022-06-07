<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vot\Vot;
use Illuminate\Http\Request;



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

        if ($request->vot == 'yes') {
            Vot::where('id', $request->id)->increment('yes');
            Vot::where('id', $request->id)->increment('total_vot');
            // return redirect()->back();
        }
        if ($request->vot == 'no') {
            Vot::where('id', $request->id)->increment('no');
            Vot::where('id', $request->id)->increment('total_vot');
            // return redirect()->back();
        }
        if ($request->vot == 'no_comment') {
            Vot::where('id', $request->id)->increment('no_comment');
            Vot::where('id', $request->id)->increment('total_vot');
            // return redirect()->back();
        }

        return "vot update";



       }
    }
}
