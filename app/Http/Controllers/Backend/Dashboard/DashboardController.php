<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
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

       return view('backend.dashboard.dashboard');
   }
}
