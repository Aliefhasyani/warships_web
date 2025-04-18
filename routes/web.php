<?php

use App\Http\Controllers\AddWarshipsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'home']);

Route::get('/createWarships',[AddWarshipsController::class, 'create'])->name('warships.create');
Route::post('/createWarships/post',[AddWarshipsController::class, 'store'])->name('warships.post');

Route::get('/warships',[AddWarshipsController::class, 'warships'])->name('warships.list');

Route::get('/edit/warships/{id}',[AddWarshipsController::class, 'edit'])->name('warships.edit');
Route::put('/update/warships/{id}',[AddWarshipsController::class, 'update'])->name('warships.update');