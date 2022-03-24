<?php

use App\Http\Controllers\Project\ProductController;
use App\Http\Controllers\ResourceController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return 'welcome';
})->name('login');

Route::group(['namespace'=>'Project' , 'prefix'=>'project' , 'middleware'=>'auth'],function(){


// Route::get('/index' ,[ProductController::class , 'index'])->middleware('auth);only this Route

Route::get('/index' ,[ProductController::class , 'index']);

Route::get('/show/{id}',[ProductController::class, 'take' ]);

Route::get('/last',[ProductController::class , 'last']);

Route::get('/search/{searchword}',[ProductController::class ,'search']);

});


Route::resource('photos', ResourceController::class);
//
Route::get('books/create' , [ProductController::class , 'create']);

Route::post('books/store' , [ProductController::class , 'store']);

//
Route::get('books/edit/{id}' , [ProductController::class , 'edit']);

Route::post('books/update/{id}' , [ProductController::class , 'update']);

///
Route::get('books/delete/{id}' , [ProductController::class , 'delete'] );


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
