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

//テストページ
Route::get('/t', [\App\Http\Controllers\test\IndexController::class,'show'])->name('test');
Route::post('/t/post', [\App\Http\Controllers\test\IndexController::class,'button'])->name('button');
Route::get('/pythonTest', [\App\Http\Controllers\python\python_test::class,'testRun']);

//日記サイト
Route::get('/diary', \App\Http\Controllers\diary\home\IndexController::class)->name('home');

Route::get('/diary/write', \App\Http\Controllers\diary\write\IndexController::class)->name('write');
Route::post('/diary/write/create', \App\Http\Controllers\diary\write\CreateController::class)->name('create');
Route::post('/diary/write/create/image', \App\Http\Controllers\diary\write\UploadController::class)->name('create.image');

Route::get('/diary/delete', \App\Http\Controllers\diary\delete\IndexController::class)->name('delete');
Route::post('/diary/delete/mysql', \App\Http\Controllers\diary\delete\DeleteController::class)->name('delete.mysql');