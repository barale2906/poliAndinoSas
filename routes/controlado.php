<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlado\HomeController;


Route::get('/', [HomeController::class, 'index']);
