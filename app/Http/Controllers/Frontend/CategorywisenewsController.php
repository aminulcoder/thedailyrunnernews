<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\Blog\SubCategory;
use Illuminate\Http\Request;

class CategorywisenewsController extends Controller
{
    public function categoryNews(Request $request, $id)
    {

        $category = Category::firstWhere('id', $id);
        $allnews  = News::where('category_id', $id)->orderBy('id', 'desc')->latest()->paginate(10);
        $latestnews   = News::take(6)->latest()->get();
        $latestpost = News::where('category_id', $id)->latest()->first();
        $mostreadnews = News::take(4)->orderBy('view_count', 'desc')->get();
        // return $latestpost;

        return view('frontend.categorynews', compact('category', 'allnews','latestnews','latestpost' ,'mostreadnews'));
    }


}
