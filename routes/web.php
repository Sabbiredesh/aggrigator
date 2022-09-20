<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();
//
//
//
Route::get('/', function () {
    return view('Landing_page.landingpage');
});

Route::get('/ecomarce', function() {
    return view('Landing_page.Ecomerce_page.overview');
});

Route::get('/dashbord', function() {
    return view('Landing_page.Ecomerce_page.dashbord');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware([\App\Http\Middleware\Authenticate::class])->group(function(){
Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'Admin'],function()
{
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
Route::get('/profile', [UserController::class, 'index'])->name('user.dashboard');

Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'User'],function()
{
Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
});

