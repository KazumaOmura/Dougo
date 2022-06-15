<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\UpdateController;

Route::get('/', function () {
    return view('sample')->name('sample');
});


Route::get('/user', [UserListController::class, 'index']);
Route::get('/user/{user_id}', [UserFormController::class, 'index']);

Route::post('{any}/update', [UpdateController::class, 'save']);
