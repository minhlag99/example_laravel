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
Route::get('my_user', [\App\Http\Controllers\MyUserController::class, 'index']);
Route::get('my_user/create', [\App\Http\Controllers\MyUserController::class, 'create']);
Route::post('my_user/create', [\App\Http\Controllers\MyUserController::class, 'store']);
Route::get('my_user/{id}/edit', [\App\Http\Controllers\MyUserController::class, 'edit']);
Route::post('my_user/update', [\App\Http\Controllers\MyUserController::class, 'update']);
Route::get('my_user/{id}/delete', [\App\Http\Controllers\MyUserController::class, 'destroy']);