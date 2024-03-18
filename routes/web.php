<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\web\WebPageController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//auth routes
Auth::routes();
Route::get('post-register', [RegisterController::class, 'postRegister'])->name('post-register');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
// Route::get('/logout', function () {
//     Auth::logout();

//     return redirect('/');
// })->name('logout');
