<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\Blog\SubCategory;
use App\Models\User;
use App\Models\Vot\Vot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

   public function index(){

    // if (is_null($this->user) || !$this->user->can('dashboard.view')) {
    //     abort(403, 'Sorry !! You are Unauthorized to view any dashboard !');
    // }
        $totalVot = Vot::count('description');
        $totalCategory = Category::count('name');
        $totalUser = User::count('name');
        $totalAdmin = Admin::count('name');
        $totalNews = News::count('title');
        $totalSubCategory = SubCategory::count('name');
       return view('backend.dashboard.dashboard',compact('totalNews','totalAdmin','totalSubCategory','totalCategory','totalUser','totalVot'));
   }
}
