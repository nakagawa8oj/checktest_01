<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checktest01Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;


Route::get('/', [Checktest01Controller::class, 'index']);
Route::post('/contacts/confirm', [Checktest01Controller::class, 'confirm']);
Route::post('/contacts', [Checktest01Controller::class, 'store']);

 Route::get('/categories', [CategoryController::class, 'index']);