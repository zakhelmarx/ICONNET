<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\transaksicontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home2Controller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::view('/','welcomu');

Route::get('/welcome',[HomeController::class,'index']);
Route::get('/',[Home2Controller::class,'data2']);
Route::get('/welcome',[HomeController::class,'data1']);

Route::get('/index',[Home2Controller::class,'data3']);
Route::get('/index2',[Home2Controller::class,'data4']);
Route::get('/index3',[Home2Controller::class,'data5']);
Route::get('/index4',[Home2Controller::class,'data6']);

Route::get('/index5',[Home2Controller::class,'data7']);
Route::get('/index6',[Home2Controller::class,'data8']);
Route::get('/index7',[Home2Controller::class,'data9']);
Route::get('/index8',[Home2Controller::class,'data10']);

Route::get('/index9',[Home2Controller::class,'data11']);
Route::get('/index10',[Home2Controller::class,'data12']);
Route::get('/index11',[Home2Controller::class,'data13']);
Route::get('/index12',[Home2Controller::class,'data14']);

Route::get('/index13',[Home2Controller::class,'data15']);
Route::get('/index14',[Home2Controller::class,'data16']);
Route::get('/index15',[Home2Controller::class,'data17']);
Route::get('/index16',[Home2Controller::class,'data18']);

Route::get('/index17',[Home2Controller::class,'data19']);
Route::get('/index18',[Home2Controller::class,'data20']);
Route::get('/index19',[Home2Controller::class,'data21']);
Route::get('/index20',[Home2Controller::class,'data22']);

Route::get('/welcome/create',[HomeController::class,'create']);
Route::post('/welcome/store',[HomeController::class,'store']);
Route::get('/welcome',[HomeController::class,'data2']);
Route::get('/welcome/create2',[HomeController::class,'create2']);
Route::post('/welcome/store2',[HomeController::class,'store2']);
Route::get('/logout', function(){Auth::logout();return redirect('/');});



//Route::get('/register',[SeesionController::class,'register']);
//Route::get('/sesi',[SeesionController::class,'index']);
//Route::post('/sesi/login',[SeesionController::class,'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
