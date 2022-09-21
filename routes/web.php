<?php

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

Route::get('/', function () {
    $title = 'home';
    return view('home',compact('title'));
});
Route::get('/main', function () {
    $data = config('comics');
    return view('main',compact('data'));
    
})->name('series');

Route::get('/comics', function(){
    return view('comics.index');
})->name('single');
