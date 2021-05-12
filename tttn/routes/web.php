<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PhimController;
use App\Http\Controllers\LichChieuController;

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

//cronjob
Route::get('/', function() {
    return \Redirect::to('/home');
});
Route::get('/cronjob', function() {
    Artisan::call('schedule:run ');
});
//reset
Route::get('/reset', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    return \Redirect::to('/home');
});
//Home
Route::get('/home','App\Http\Controllers\homeController@home')->name("home");
Route::get('/singlePhim/{idPhim}','App\Http\Controllers\homeController@singlePhim');
Route::get('/dsphim/{idLPhim}','App\Http\Controllers\homeController@dsphimtheotheloai');
Route::post('/phimSearch','App\Http\Controllers\homeController@phimSearch');
Route::get('/dsLC/{idPhim}','App\Http\Controllers\homeController@dsLC');

//Ve
Route::get('/ve/{idKH}/{idLC}/{idGhe}/{idKM}', 'App\Http\Controllers\veController@veCheckview');
Route::post('/veTemplateCreate', 'App\Http\Controllers\veController@veTemplateCreate');
Route::get('/dsve','App\Http\Controllers\veController@dsve');
Route::get('/dsve/liveSearchdsve','App\Http\Controllers\veController@liveSearchdsve');
Route::get('/veTemplateShow/{idVe}','App\Http\Controllers\veController@veTemplateShow');

//Khuyen mai
Route::get('/dskm','App\Http\Controllers\kmController@dsKM');
Route::get('/dskm/liveSearchdskm','App\Http\Controllers\kmController@liveSearchdskm');
Route::get('/singleKM/{idKM}','App\Http\Controllers\kmController@singleKM');
Route::get('/frmthemKM','App\Http\Controllers\kmController@themKM');
Route::post('/crudKM','App\Http\Controllers\kmController@crudKM');

//Ghe
Route::get('/dsghe/{idPhong}/{idLC}','App\Http\Controllers\homeController@viewDSGhe');

//NV
Route::get('/admin','App\Http\Controllers\adminController@admin');
Route::post('/admin-dashboard','App\Http\Controllers\adminController@login');
Route::get('/logoutadmin','App\Http\Controllers\adminController@logout');
Route::get('/profileadmin/{idNV}','App\Http\Controllers\adminController@profileadmin');
Route::post('/update-nv/{idNV}','App\Http\Controllers\adminController@updateprofile');
Route::get('change-passwordadmin','App\Http\Controllers\adminController@changepass');
Route::post('update-passwordadmin','App\Http\Controllers\adminController@updatepass');

//QuanlyKH
Route::get('/quanlykh','App\Http\Controllers\adminController@quanlykh');
Route::get('/xoakh/{idKH}', 'App\Http\Controllers\adminController@xoakh');
Route::get('/suakh/{idKH}', 'App\Http\Controllers\adminController@xoakh');
Route::get('/suakh/{idKH}','App\Http\Controllers\AuthController@profile')->name('profile');
Route::get('/profilekh/{idKH}','App\Http\Controllers\AuthController@profile')->name('profile');


//lichchieu
Route::get('/lichchieu',[LichChieuController::class,"index"])->name('lichchieu');
Route::post("/lichchieu/store",[LichChieuController::class,'store']);
Route::get("/lichchieu/create",[LichChieuController::class,"create"])->name("lichchieu.create");
Route::delete("/lichchieu/{idLC}/delete", [LichChieuController::class,"destroy"])->name("lichchieu.delete");
Route::get("/lichchieu/{idLC}/edit",[LichchieuController::class,'edit'])->name("lichchieu.edit");
Route::put("/lichchieu/{idLC}/update", [LichChieuController::class,"update"])->name("lichchieu.update");

//phim
Route::get("/phim",[PhimController::class,'index'])->name('phim');
Route::post("/phim/store",[PhimController::class,'store']);
Route::get("/phim/create",[PhimController::class,'create'])->name("phim.create");
Route::delete("/phim/{idPhim}/delete", [PhimController::class,"destroy"])->name("phim.delete");
Route::get("/phim/{idPhim}/edit",[PhimController::class,'edit'])->name("phim.edit");
Route::put("/phim/{idPhim}/update", [PhimController::class,"update"])->name("phim.update");

//KH
Route::post('/actionlogin','App\Http\Controllers\AuthController@actionlogin');
Route::get('/getsignup','App\Http\Controllers\AuthController@getSignup');
Route::post('/postsignup','App\Http\Controllers\AuthController@postSignup');
Route::get('/profile/{idKH}','App\Http\Controllers\AuthController@profile')->name('profile');
Route::post('/update-cus/{idKH}','App\Http\Controllers\AuthController@updateprofile');
Route::get('/change-password','App\Http\Controllers\AuthController@changepass');
Route::post('/update-password','App\Http\Controllers\AuthController@updatepass');
Route::get('/logout','App\Http\Controllers\AuthController@logout');