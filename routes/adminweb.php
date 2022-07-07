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

    Route::get('dashboard', [DashboardDashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('roles', RolesController::class, ['name' => 'admin.roles']);
    Route::resource('users', UsersController::class, ['name' => 'admin.users']);
    Route::resource('admins', AdminsController::class, ['name' => 'admin.admins']);
    // ------------------------------------------Login Routes---------------------------------
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login/submit', [loginController::class, 'login'])->name('admin.login.submit');
    //------------------------------------------ Logout Routes------------------------------
    Route::post('/logout/submit', [loginController::class, 'logout'])->name('admin.logout.submit');
    // ------------------------------------------Forget Password Routes----------------
    Route::get('/password/reset', [ForgetPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('/login/reset/submit', [ForgetPasswordController::class, 'reset'])->name('admin.password.update');

    // ---------------------------------------------LOCATION-----------------------------
    Route::resource('division', DivisionController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('upazila', UpazilaController::class);
    //----------------------------------------------------setting----------------------------------
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SiteController::class, 'index'])->name('admin.setting.index');
        Route::get('/create', [SiteController::class, 'create'])->name('admin.setting.create');

        Route::post('/title', [SiteController::class, 'storetitle'])->name('admin.setting.storetitle');
        Route::post('/email', [SiteController::class, 'siteEmailstore'])->name('admin.setting.siteEmailstore');
        Route::post('/telephone_no', [SiteController::class, 'siteTelephonenoStore'])->name('admin.setting.siteTelephonenoStore');

        Route::post('/facebook_link', [SiteController::class, 'facebooklinkStore'])->name('admin.setting.facebooklinkStore');
        Route::post('/facebook_page_link', [SiteController::class, 'facebookpagelinkStore'])->name('admin.setting.facebookpagelinkStore');
        Route::post('/facebook_group_link', [SiteController::class, 'facebookgrouplinkStore'])->name('admin.setting.facebookgrouplinkStore');
        Route::post('/twitter_link', [SiteController::class, 'twitterlinkStore'])->name('admin.setting.twitterlinkStore');
        Route::post('/instagram_link', [SiteController::class, 'instagramlinkStore'])->name('admin.setting.instagramlinkStore');
        Route::post('/linkedin_link', [SiteController::class, 'linkedinlinkStore'])->name('admin.setting.linkedinlinkStore');
        Route::post('/youtube_link', [SiteController::class, 'youtubelinkStore'])->name('admin.setting.youtubelinkStore');
        Route::post('/intro_video_link', [SiteController::class, 'introvideolinkStore'])->name('admin.setting.introvideolinkStore');

        Route::post('/mobile_no', [SiteController::class, 'mobileNoStore'])->name('admin.setting.mobileNoStore');
        Route::post('/address', [SiteController::class, 'addressStore'])->name('admin.setting.addressStore');
        Route::post('/working_day', [SiteController::class, 'workingdayStore'])->name('admin.setting.workingdayStore');
        Route::post('/working_time', [SiteController::class, 'workingtimeStore'])->name('admin.setting.workingtimeStore');

        Route::post('/logo', [SiteController::class, 'logoStore'])->name('admin.setting.logoStore');
    });
    Route::resource('news', NewsController::class);
    Route::get('/status-update/{id}', [NewsController::class, 'statusUpdate'])->name('news.status.update');

    // Route::get('change-status', [NewsController::class, 'changeStatus']);

    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('tags', TagsController::class);

    Route::resource('vot', VotController::class);
    Route::post('pull/crete', [PullController::class, 'pullcreate'])->name('pull.create');
    Route::post('pull/store', [PullController::class, 'pullstore'])->name('pull.store');
});

Route::get('district-from-division/{id}', [LoactionAjaxController::class, 'districtFromDivision'])->name('districtFromDivision');
Route::get('/upazila-from-district/{id}', [LoactionAjaxController::class, 'upazilaFromDistrict'])->name('upazilaFromDistrict');

Route::get('/district-division/{id}', [LoactionAjaxController::class, 'districtDivision'])->name('districtDivision');


//-------------------sidebar location Dependancy--------------
Route::get('/district-side-division/{id}', [LoactionAjaxController::class, 'Divisiontodistrict'])->name('districttoDivision');
Route::get('/upazila-side-district/{id}', [LoactionAjaxController::class, 'upazilatoDistrict'])->name('upazilatoDistrict');


//--------------------------------category dependency-----------------
Route::get('/category-to-subcategory/{id}', [CategoryajaxController::class, 'CategorytoSubcategory'])->name('categorytosubcategory');
