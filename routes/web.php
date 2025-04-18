<?php

use App\Http\Controllers\AddWarshipsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'home']);

Route::get('/createWarships',[AddWarshipsController::class, 'create']);
Route::post('/createWarships/post',[AddWarshipsController::class, 'store'])->name('warships.post');
Route::get('/warships',[AddWarshipsController::class, 'warships']);
