<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('welcome',[WelcomeControler::class,'welcome']);


Route::get('clients', [UsersController::class, 'users']);

