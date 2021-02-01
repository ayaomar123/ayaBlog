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
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\EditProfileController;

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



Auth::routes();
Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/', [HomeEditController::class, 'index'])->name('home');

Route::get('rating/{star}', [RatingController::class, 'postRating'])->name('rating');
Route::get('comment/{slug}', [CommentController::class, 'postComment'])->name('comment');
Route::get('call', [EconmoyController::class, 'call'])->name('call');
Route::post('callPost', [EconmoyController::class, 'callPost'])->name('callPost');
Route::get('showMsg', [EconmoyController::class, 'showMsg'])->name('showMsg');



Route::group(['middleware' => ['is_admin']], function() {
    Route::get('home/{locale}', [LocalizationController::class, 'lang']);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('slider', SliderController::class);
    Route::get("slider/{id}",[SliderController::class,'destroy'])->name("slider.delete");


    Route::resource('staticPages', StaticPagesController::class);
    Route::delete('staticPages/{id}', [StaticPagesController::class, 'destroy'])->name('static-delete');


    Route::get('index/{id}', [HomeEditController::class, 'page'])->withoutMiddleware(['is_admin']);
    Route::get('economy/{id}', [EconmoyController::class, 'economy'])->withoutMiddleware(['is_admin']);
    Route::get('details/{id}', [EconmoyController::class, 'details'])->withoutMiddleware(['is_admin']);
    Route::get('pages/{id}', [PageController::class, 'pages'])->withoutMiddleware(['is_admin']);


    Route::resource('setting', SettingController::class);


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
        Route::put('deactive',[CategoryController::class, 'deactive'])->name('deactive');
        Route::put('activate',[CategoryController::class, 'activate'])->name('activate');
    });
    Route::get('searching',[CategoryController::class, 'searching'])->name('searching');
    Route::delete('productsDeleteAll',[CategoryController::class, 'deleteAll'])->name('category.multiple-delete');


    Route::group(['prefix' => 'articles','as'=>'articles.'], function(){
        Route::get('/',[ArticleController::class, 'index'])->name('index');
        Route::get('data',[ArticleController::class, 'data'])->name('data');
        Route::get('/create', [ArticleController::class, 'create'])->name('create');
        Route::post('/',  [ArticleController::class, 'store'])->name('store');
        Route::get('/{id}', [ArticleController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [ArticleController::class, 'update'])->name('update');
        Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('destroy');
        Route::post('changeStatus',[ArticleController::class, 'changeStatus'])->name('changeStatus');
        Route::put('deactive',[ArticleController::class, 'deactive'])->name('deactive');
        Route::put('activate',[ArticleController::class, 'activate'])->name('activate');
    });
    Route::delete('myproductsDeleteAll',[ArticleController::class, 'deleteAll'])->name('myproductsDeleteAll');



    Route::get("editProfile",[EditProfileController::class,'editProfile'])->name('editProfile');
    Route::post("editProfile",[EditProfileController::class,'postEditProfile'])->name('post-editProfile');

    Route::get("change-password",[ChangePasswordController::class,'changePassword'])->name('change-password');
    Route::post("change-password",[ChangePasswordController::class,'postChangePassword'])->name('post-change-password');
});
