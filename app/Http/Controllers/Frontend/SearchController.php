<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }

        $category = null;
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
        }

        // return $keyword;
        $latestnews   = News::take(6)->get();
        $categories = Category::get();

        $posts = News::with('user')->when($keyword, function ($query, $keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%');
        })->get();
        // return  $posts;
        $news         = News::all();

        return view('frontend.searchpage',compact('posts','latestnews','categories','news'));
    }
}
