<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarioController;
use App\Http\Controllers\CharaController;
use Illuminate\Http\Request;

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


Route::get('/top', [MarioController::class, 'top']);

Route::get('/douga', [MarioController::class, 'douga']);

Route::get('/menseki', [MarioController::class, 'menseki']);

Route::get('/course_list', [MarioController::class, 'course_list']);

Route::get('/kaihouCourse', [MarioController::class, 'kaihouCourse']);

Route::get('/custom', [MarioController::class, 'custom']);
Route::post('/custom', [MarioController::class, 'custom']);

Route::get('/chara', [MarioController::class, 'chara']);

Route::post('/chara_result', [MarioController::class, 'chara_result']);

//modelを使用してDB連携するバージョン
Route::get('/chara2', [CharaController::class, 'chara2']);

Route::post('/chara_result2', [CharaController::class, 'chara_result2']);