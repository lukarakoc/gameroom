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
    return view('index');
});

// Public rute -----------------------------------

Route::get('/blog', 'AdministrationController@blog');

Route::get('/blog/{id}', 'AdministrationController@blogDetail');



// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/blog', 'BlogController');

Route::resource('admin/tournaments', 'TournamentController');

Route::resource('admin/reservations', 'ReservationController');

Route::post('/reserve', 'WebsiteController@reserveDevices')->name('website.reservation');

Route::post('/device-status-change/{id}', 'PcSonyController@toggleStatus');

Route::get('/report', 'PCSonyController@reportShow');

Route::get('/report-reset', 'PCSonyController@reportReset');

Route::get('/report-download', 'PCSonyController@reportDownload');


Route::get('/check', 'ReservationController@checkReservation');

Route::get('/reservations-delete', 'ReservationController@delete');

