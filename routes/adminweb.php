<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Location\DistrictController;
use App\Http\Controllers\Backend\Location\DivisionController;
use App\Http\Controllers\Backend\Location\UpazilaController;
use App\Http\Controllers\Backend\Location\LoactionAjaxController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Backend\Admins\AdminsController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Blog\Post\CategoryajaxController;
use App\Http\Controllers\Backend\Blog\Post\CategoryController;
use App\Http\Controllers\Backend\Blog\Post\NewsController;
use App\Http\Controllers\Backend\Blog\Post\SinglePageController;
use App\Http\Controllers\Backend\Blog\Post\SubCategoryController;
use App\Http\Controllers\Backend\Blog\Post\TagsController;
use App\Http\Controllers\Backend\Dashboard\DashboardController as DashboardDashboardController;
use App\Http\Controllers\Backend\Roles\RolesController;
use App\Http\Controllers\Backend\Setting\SiteController;
use App\Http\Controllers\Backend\Users\UsersController;
use App\Http\Controllers\Backend\Vot\PullController;
use App\Http\Controllers\Backend\Vot\VotController;
use App\Http\Controllers\FrontEnd\CategorywisenewsController;
use Database\Seeders\LocationSeeder;

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



Route::group(['prefix' => 'admin'], function () {
    //---------------------DASHBOARD----------------------------

    Route::get('dashboard',[DashboardDashboardController::class,'index'])->name('admin.dashboard');

    Route::resource('roles',RolesController::class ,['name'=>'admin.roles']);
    Route::resource('users',UsersController::class ,['name'=>'admin.users']);

    Route::resource('admins',AdminsController::class ,['name'=>'admin.admins']);


    // ------------------------------------------Login Routes---------------------------------
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login/submit',[loginController::class,'login'])->name('admin.login.submit');

    //------------------------------------------ Logout Routes------------------------------
    Route::post('/logout/submit',[loginController::class,'logout'])->name('admin.logout.submit');

    // ------------------------------------------Forget Password Routes----------------
    Route::get('/password/reset',[ForgetPasswordController::class,'showLinkRequestForm'])->name('admin.password.request');
    Route::post('/login/reset/submit',[ForgetPasswordController::class,'reset'])->name('admin.password.update');

    // ---------------------------------------------LOCATION-----------------------------
    Route::resource('division', DivisionController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('upazila', UpazilaController::class);
    //----------------------------------------------------setting----------------------------------
    Route::get('setting', [SiteController::class, 'index'])->name('admin.setting.index');
    Route::get('setting/create', [SiteController::class, 'create'])->name('admin.setting.create');
    Route::post('setting', [SiteController::class, 'store'])->name('admin.setting.store');


    Route::resource('news', NewsController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('tags', TagsController::class);

    Route::resource('vot', VotController::class);
    Route::post('pull/crete',[PullController::class,'pullcreate'])->name('pull.create');
    Route::post('pull/store',[PullController::class,'pullstore'])->name('pull.store');

});



Route::get('district-from-division/{id}', [LoactionAjaxController::class, 'districtFromDivision'])->name('districtFromDivision');
Route::get('/upazila-from-district/{id}', [LoactionAjaxController::class, 'upazilaFromDistrict'])->name('upazilaFromDistrict');

Route::get('/district-division/{id}', [LoactionAjaxController::class, 'districtDivision'])->name('districtDivision');


//-------------------sidebar location Dependancy--------------
Route::get('/district-side-division/{id}', [LoactionAjaxController::class, 'Divisiontodistrict'])->name('districttoDivision');
Route::get('/upazila-side-district/{id}', [LoactionAjaxController::class, 'upazilatoDistrict'])->name('upazilatoDistrict');


//--------------------------------category dependency-----------------
Route::get('/category-to-subcategory/{id}', [CategoryajaxController::class, 'CategorytoSubcategory'])->name('categorytosubcategory');
