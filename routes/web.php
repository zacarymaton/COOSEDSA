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

Route::get('/', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('plantilla-2');
});
Route::get('/general', function () {
    return view('general');
});
Route::get('/buttons', function () {
    return view('buttons');
});
Route::get('/panels', function () {
    return view('panels');
});
Route::get('/font_awesome', function () {
    return view('font_awesome');
});
Route::get('/grids', function () {
    return view('grids');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/todo_list', function () {
    return view('todo_list');
});
Route::get('/dropzone', function () {
    return view('dropzone');
});
Route::get('/inline_editor', function () {
    return view('inline_editor');
});
Route::get('/file_upload', function () {
    return view('file_upload');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/lock_screen', function () {
    return view('lock_screen');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/pricing_table', function () {
    return view('pricing_table');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/500', function () {
    return view('500');
});
Route::get('/form_component', function () {
    return view('form_component');
});
Route::get('/advanced_form_components', function () {
    return view('advanced_form_components');
});
Route::get('/form_validation', function () {
    return view('form_validation');
});
Route::get('/basic_table', function () {
    return view('basic_table');
});
Route::get('/responsive_table', function () {
    return view('responsive_table');
});
Route::get('/advanced_table', function () {
    return view('advanced_table');
});
Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/morris', function () {
    return view('morris');
});
Route::get('/chartjs', function () {
    return view('chartjs');
});
Route::get('/flot_chart', function () {
    return view('flot_chart');
});
Route::get('/xchart', function () {
    return view('xchart');
});
Route::get('/lobby', function () {
    return view('lobby');
});Route::get('/chat_room', function () {
    return view('chat_room');
});
Route::get('/google_maps', function () {
    return view('google_maps');
});
Route::get('/firebase', 'FirebaseController@index');
