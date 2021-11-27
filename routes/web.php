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
    return View::make('pages.home');
});

Route::get('/About', function () {
    return View::make('pages.about');
});
// Route::get('/Contact', function () {
//     return View::make('pages.contacts');
// });
Route::get('/Gallery', function () {
    return View::make('pages.gallery');
});
Route::get('/Services', function () {
    return View::make('pages.services');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});


Route::get('/Contact', 'App\Http\Controllers\ContactUSController@contactUS');
Route::post('/Contact', ['as' => 'contactus.store', 'uses' => 'App\Http\Controllers\ContactUSController@contactUSPost']);
