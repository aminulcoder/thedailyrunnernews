<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\Blog\SubCategory;
use Illuminate\Http\Request;

class SubcategorypostController extends Controller
{
    public function subcategoryNews(Request $request, $id)
    {

        $category    = Category::firstWhere('id', $id);
        $subcategory = SubCategory::firstWhere('id', $id);
        $allnews     = News::where('sub_category_id', $id)->orderBy('id', 'desc')->latest()->paginate(10);

        $latestnews  = News::take(6)->latest()->get();
        $latestspost = News::where('sub_category_id', $id)->latest()->first();
        return view('frontend.subcategorynews', compact('category', 'allnews', 'latestnews', 'subcategory', 'latestspost'));
    }
}
