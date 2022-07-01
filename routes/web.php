<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Location\DivisionController;
use App\Http\Controllers\Backend\Vot\VotController;
use App\Http\Controllers\Frontend\AjaxvotController;
use App\Http\Controllers\Frontend\CategoryNewsController;
use App\Http\Controllers\Frontend\CategorywisenewsController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\LocationwisenewsController;
use App\Http\Controllers\Frontend\LpostController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Frontend\SinglepostController;
use App\Http\Controllers\Frontend\SubcategorypostController;
use App\Http\Controllers\Frontend\SubCategorywiseController;
use App\Http\Controllers\QrcodeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomepageController::class,'homepage'])->name('homepage');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/news/{id}',[SinglepostController::class,'singlenews'])->name('singlenews');

Route::get('/category/{id}',[CategorywisenewsController::class,'categoryNews'])->name('category.news');

Route::get('/subcategory/{id}',[SubcategorypostController::class,'subcategoryNews'])->name('subcategory.news');

// Route::get('/locationnews',[LocationwisenewsController::class,'locationWisenews'])->name('location.news');
Route::get('/locationnews',[LpostController::class,'locationWisenews'])->name('location.news');


Route::get('search', [SearchController::class, 'search'])->name('search.page');


Route::get('ajaxvot', [AjaxvotController::class, 'index']);
Route::post('ajax/vot/update', [AjaxvotController::class, 'updateOnlineVot']);

Route::get('qrcode', [QrcodeController::class, 'index'])->name('qrcode');
