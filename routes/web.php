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


Route::get('/', 'HomeController@index')->name('index');
Route::get('/voters', 'HomeController@voters')->name('voters');
Route::get('/voters/edit/{voterid}', 'HomeController@editvoters')->name('editvoters');
Route::post('/voters/updatevoter', 'HomeController@updatevoter')->name('updatevoter');
Route::post('/voters/updatevoterside', 'HomeController@updatevoterside')->name('updatevoterside');
Route::post('/voters/updatemultiplevoterside', 'HomeController@updatemultiplevoterside')->name('updatemultiplevoterside');
Route::post('/voters/homeupdatemultiplevoterside', 'HomeController@homeupdatemultiplevoterside')->name('homeupdatemultiplevoterside');
Route::get('/voters/searchvoters', 'HomeController@searchvoters')->name('searchvoters');
Route::get('/voters/delete/{voterid}', 'HomeController@deletevoters')->name('deletevoters');
Route::get('/leaders', 'HomeController@leaders')->name('leaders');
Route::get('/voters/leader/{id}', 'HomeController@makeleader')->name('makeleader');
Route::get('/voters/rmleader/{id}', 'HomeController@rmleader')->name('rmleader');
Route::get('/voters/supporter/{id}', 'HomeController@supporter')->name('supporter');
Route::get('/voters/opponent/{id}', 'HomeController@opponent')->name('opponent');
Route::post('/addvoters', 'HomeController@addvoters')->name('addvoters');
Route::get('/generate', 'HomeController@generatevoters')->name('generatevoters');
Route::get('/brgy/{brgy}', 'HomeController@viewBrgy')->name('viewBrgy');
Route::get('/brgy/precinct/{precinct}', 'HomeController@viewrbrgyPrecinct')->name('viewrbrgyPrecinct');
Route::get('/precinct/{precinct}', 'HomeController@viewprecinct')->name('viewprecinct');
Route::get('/brgy', 'HomeController@brgy')->name('brgy');
Route::get('/leaders/{brgy}', 'HomeController@brgyleaders')->name('brgyleaders');
Route::get('/nostyleleaders/{brgy}', 'HomeController@nostyleleaders')->name('brgyleaders');
Route::get('/statistics', 'HomeController@statistics')->name('statistics');
Route::get('/report', 'HomeController@report')->name('report');
Route::get('/success', 'HomeController@success')->name('report');
Route::get('/homesuccess', 'HomeController@homesuccess')->name('homesuccess');
Route::post('/report/reportvoters', 'HomeController@reportvoters')->name('reportvoters');
Route::get('/report/leaders', 'HomeController@leaderreport')->name('leaderreport');
Route::post('/report/brgy/opponents', 'HomeController@reportopponents')->name('reportopponents');
Route::post('/report/brgy/supporters', 'HomeController@reportsupporters')->name('reportsupporters');
Route::get('/member/{brgy}/{leaderid}', 'HomeController@member')->name('member');
Route::get('/voters/memberlist/{voterid}/{leaderid}', 'HomeController@memberlist')->name('memberlist');
Route::get('/voters/removememberlist/{memberid}', 'HomeController@removememberlist')->name('removememberlist');