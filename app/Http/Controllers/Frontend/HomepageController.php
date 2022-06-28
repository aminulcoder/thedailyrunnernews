<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\District;
use App\Models\Division;
use App\Models\Vot\Vot;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Http\Request;
use EasyBanglaDate\Types\BnDateTime;
use EasyBanglaDate\Types\DateTime as EnDateTime;

class HomepageController extends Controller
{
    public function homepage()
    {
        $news         = News::latest()->get();
        $lastnews     = News::latest()->first();
        $latestnews   = News::latest()->take(4)->get();
        $natinoal     = News::take(6)->latest()->get();
        $categorynews = Category::with('news')->get();
        // return  $categorynews;
        $vots         = Vot::take(1)->latest()->get();
        $divissions   = Division::all();

        return view('frontend.homepage', compact('news', 'latestnews', 'natinoal', 'categorynews', 'lastnews', 'vots', 'divissions'));
    }
}
