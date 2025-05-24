<?php

use App\Http\Controllers\AddWarshipsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'home'])->name('home');

Route::get('/createWarships',[AddWarshipsController::class, 'create'])->name('warships.create');
Route::post('/createWarships/post',[AddWarshipsController::class, 'store'])->name('warships.post');

Route::get('/warships',[AddWarshipsController::class, 'warships'])->name('warships.list');
Route::get('/warships/search',[AddWarshipsController::class, 'search'])->name('warships.search');


Route::get('/warship/edit/{id}', [AddWarshipsController::class, 'edit'])->name('warships.edit');
Route::put('/warship/edit/update/{id}', [AddWarshipsController::class, 'update'])->name('warships.update');

Route::delete('/warships/delete/{id}', [AddWarshipsController::class, 'destroy'])->name('warships.delete');

Route::get('/calculate',[MainController::class, 'showForm'])->name('show.form');
Route::post('/calculate',[MainController::class, 'calculate'])->name('calculate');


Route::get('/warship/{id}',[MainController::class,'showWarship'])->name('warship.get');
Route::post('/warship/{id}',[MainController::class,'showWarship'])->name('warship.show');





