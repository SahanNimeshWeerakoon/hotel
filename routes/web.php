<?php

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

// Public Routes
Route::get('/', function() {
    return redirect('/home');
});
Route::get('/home', 'PagesController@home');
Route::get('/home/{lang?}', function($lang=null) {
    App::setlocale($lang);
    return view('pages.home');
});
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/contact/{lang?}', function($lang=null) {
    App::setlocale($lang);
    return view('pages.contact');
});
Route::get('/book', 'PagesController@book');
Route::get('/book/{lang?}', function($lang=null) {
    App::setlocale($lang);
    return view('pages.book');
});

Route::post('/contact', 'SubmitController@contact');
Route::post('/book', 'SubmitController@book');

// Admin Routes
Route::get('admincontact', 'adminPagesController@admincontact');
Route::get('adminbook', 'adminPagesController@adminbook');
Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::get('/admincontact/{id}', 'AdminSubmitController@removeInquiry');
Route::get('/adminbook/{id}', 'AdminSubmitController@removeBooking');

