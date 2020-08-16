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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@index')->name('dashboard');


Route::get('/widgets', function () {
    return view('pages.widgets');
});

Route::get('/top-navigation', function () {
    return view('pages.layout.top-navigation');
});


Route::get('/top-nav-sidebar', function () {
    return view('pages.layout.top-nav-sidebar');
});


Route::get('/boxed', function () {
    return view('pages.layout.boxed');
});
Route::get('/fixed-sidebar', function () {
    return view('pages.layout.fixed-sidebar');
});
Route::get('/fixed-navbar', function () {
    return view('pages.layout.fixed-topnav');
});
Route::get('/fixed-footer', function () {
    return view('pages.layout.fixed-footer');
});
Route::get('/collapsed-sidebar', function () {
    return view('pages.layout.collapsed-sidebar');
});
Route::get('/chart', function () {
    return view('pages.charts.chartjs');
});
Route::get('/flot', function () {
    return view('pages.charts.flot');
});
Route::get('/inline', function () {
    return view('pages.charts.inline');
});



Route::get('/generalUI', function () {
    return view('pages.UI.general');
});
Route::get('/icons', function () {
    return view('pages.UI.icons');
});
Route::get('/buttons', function () {
    return view('pages.UI.buttons');
});
Route::get('/sliders', function () {
    return view('pages.UI.sliders');
});
Route::get('/modals', function () {
    return view('pages.UI.modals');
});
Route::get('/navbar', function () {
    return view('pages.UI.navbar');
});
Route::get('/timeline', function () {
    return view('pages.UI.timeline');
});
Route::get('/ribbons', function () {
    return view('pages.UI.ribbons');
});



Route::get('/general', function () {
    return view('pages.forms.general');
});
Route::get('/advanced', function () {
    return view('pages.forms.advanced');
});
Route::get('/editors', function () {
    return view('pages.forms.editors');
});
Route::get('/validation', function () {
    return view('pages.forms.validation');
});




