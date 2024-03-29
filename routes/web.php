<?php

use App\Http\Controllers\admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\web\UserController;
use App\Http\Controllers\web\WebPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(WebPageController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('committee', 'committee')->name('committee');
    Route::get('business', 'business')->name('business');
    Route::get('directories', 'directories')->name('directories');
    Route::get('articles', 'articles')->name('articles');
    Route::get('news', 'news')->name('news');
    Route::get('stories', 'stories')->name('stories');
    Route::get('offer', 'offer')->name('offer');
});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'user'
], function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('post-register', [RegisterController::class, 'postRegister'])->name('post-register');
});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin'
], function(){
    Route::get('/user', [AdminUserController::class, 'index'])->name('adminUserIndex');
    Route::get('approve-user/{id}', [AdminUserController::class, 'approve'])->name('approve-user');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('postLogin');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('user-dashboard', [UserController::class, 'dashboard'])->name('user-dashboard');
