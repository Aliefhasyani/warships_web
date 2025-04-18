<?php

use App\Http\Controllers\AddWarshipsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'home']);

