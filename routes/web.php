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
    return view('child');
});

Route::get('/isosearch', function () {
    return view('isosearch');
});
Route::get('/downloadpage', function () {
    return view('downloadpage');
});

Route::get('/searchiso', 'AjaxController@getisolist');

Route::get('/downloadpage/osid/{id}', 'ToDownload@interceptid');

Route::get('/admin', function() { 
    return view('admin');
});

Route::post('/admin/adminservices/{typ}', 'admincontrol@adminservices');

Route::post('/admin/registerlinks/{typ}', 'admincontrol@registerlinks');

Route::get('/notices', function (){
    return view('dmca');
});

Route::get('/vhddownload', function (){
    return view('error_pages/e503');
});

Route::get ('/about', function (){
    return view('about');
});

Route::get('/tools', function (){
    return view ('flash_tools');
});

Route::get('/pripol',function (){
    return view ('pripol');
});

Route::get('/isolist', function() {
    return View ('isolist');
});

Route::get('/downloadpage/getall', 'ToDownload@graballopt');

Route::post('/admin/tpupload','admincontrol@upd_json');