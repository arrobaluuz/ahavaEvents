<?php

use App\Http\Controllers\Controller;
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
    return view('bodas.LYA');
});

Route::get('/LYA', function () {return view('bodas.LYA');});
Route::get('/C&T', function () {return view('bodas.CYT');});
Route::get('/MYL', function () {return view('bodas.MYL');});

Route::get('/mesa',[Controller::class,'shearch'])->name('shearch');
Route::post('/panel',[Controller::class,'panelAnfitrion'])->name('panel');
Route::post('/pase',[Controller::class,'getPases'])->name('getPases');
Route::post('/savePase',[Controller::class,'savePase'])->name('savePase');
Route::post('/confirm',[Controller::class,'confirm'])->name('routeConfirm');

Route::get('/love/{id}',[Controller::class,'giveMoreLove'])->name('moreLove');
