<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class SinglepostController extends Controller
{

    public function singlenews(Request $request, $id){

        $news = News::firstWhere('id', $id);
         $latestnews   = News::latest()->take(6)->get();
         $lastnews     = News::first();

         $mostreadnews = News::take(4)->orderBy('view_count', 'desc')->get();
            // return  $mostreadnews;
            $blogkey = 'blog_'. $news->id;
            if(!Session::has($blogkey)){
                $news ->increment('view_count');
                Session::put($blogkey,1);

            }

            // $rendomnews = News::all()->random(number:4);
            // return $rendomnews ;
        return view('frontend.singlenews', compact('news','latestnews','lastnews' ,'mostreadnews' ));
    }

}
