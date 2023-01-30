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

Route::get('/t', [\App\Http\Controllers\test\IndexController::class,'show'])->name('test');
Route::post('/t/post', [\App\Http\Controllers\test\IndexController::class,'button'])->name('button');
Route::get('/pythonTest', [\App\Http\Controllers\python\python_test::class,'testRun']);
