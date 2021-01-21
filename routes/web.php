<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EconmoyController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomeEditController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\RatingController;

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
Route::get('/', function () {
    return view('Auth.login');
});
Route::get('/aya', function () {
    return view('Admin.board');
});

Route::get('/front/privacy', function () {
    return view('pages.privacy');
});


Route::get('/front/laws', function () {
    return view('pages.laws');
});
Route::get('/front/about', function () {
    return view('pages.about');
});
Route::get('/front/who', function () {
    return view('pages.who');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index', [HomeEditController::class, 'index'])->name('home');

Route::get('/rate', [RatingController::class, 'rate'])->name('rate');
Route::post('/ratePost', [RatingController::class, 'ratePost'])->name('ratePost');

Route::group(['middleware' => ['auth']], function() {
    Route::get('home/{locale}', [LocalizationController::class, 'lang']);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('slider', SliderController::class);
    Route::get("slider/{id}",[SliderController::class,'destroy'])->name("slider.delete");


    Route::resource('pages', PagesController::class);
    Route::get("pages/{id}/delete",[StaticPageController::class,'destroy'])->name("pages.delete");
    Route::get('index/{id}', [HomeEditController::class, 'page'])
    ->withoutMiddleware(['auth']);
    Route::get('economy/{id}', [EconmoyController::class, 'economy'])->withoutMiddleware(['auth']);
    Route::get('details/{id}', [EconmoyController::class, 'details'])->withoutMiddleware(['auth']);


    //Route::get('/{slug}', [TravelController::class, 'show']);


    Route::group(['prefix' => 'categories','as'=>'categories.'], function(){
        Route::get('/',[CategoryController::class, 'index'])->name('index');
        Route::get('data',[CategoryController::class, 'data'])->name('data');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/',  [CategoryController::class, 'store'])->name('store');
        //Route::post('/show',  [CategoryController::class, 'show'])->name('show');
        Route::get('/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
        Route::post('changeStatus',[CategoryController::class, 'changeStatus'])->name('changeStatus');
        Route::put('deactivate',[CategoryController::class, 'deactivate'])->name('deactivate');
        Route::put('activate',[CategoryController::class, 'activate'])->name('activate');
    });
    Route::get('searching',[CategoryController::class, 'searching'])->name('searching');
    Route::delete('myproductsDeleteAll',[CategoryController::class, 'deleteAll'])->name('category.multiple-delete');


    Route::group(['prefix' => 'articles','as'=>'articles.'], function(){
        Route::get('/',[ArticleController::class, 'index'])->name('index');
        Route::get('data',[ArticleController::class, 'data'])->name('data');
        Route::get('/create', [ArticleController::class, 'create'])->name('create');
        Route::post('/',  [ArticleController::class, 'store'])->name('store');
        //Route::post('/show',  [ArticleController::class, 'show'])->name('show');
        Route::get('/{id}', [ArticleController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [ArticleController::class, 'update'])->name('update');
        Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('delete');
        Route::post('changeStatus',[ArticleController::class, 'changeStatus'])->name('changeStatus');
        Route::put('deactive',[ArticleController::class, 'deactive'])->name('deactive');
        Route::put('activate',[ArticleController::class, 'activate'])->name('activate');
        Route::delete('myproductsDeleteAll',[ArticleController::class, 'deleteAll'])->name('multiple-delete');

    });


    Route::get("editProfile",[EditProfileController::class,'editProfile'])->name('editProfile');
    Route::post("editProfile",[EditProfileController::class,'postEditProfile'])->name('post-editProfile');

    Route::get("change-password",[ChangePasswordController::class,'changePassword'])->name('change-password');
    Route::post("change-password",[ChangePasswordController::class,'postChangePassword'])->name('post-change-password');
});
