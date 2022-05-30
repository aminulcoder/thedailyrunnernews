<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog\News;
use Illuminate\Http\Request;

class SinglepostController extends Controller
{

    public function singlenews(Request $request, $id){

        $news = News::firstWhere('id', $id);
         $latestnews   = News::take(6)->get();
         $lastnews     = News::first();

        return view('frontend.singlenews', compact('news','latestnews','lastnews'));
    }

}
