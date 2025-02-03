<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;


Route::get('/dashboard', [DashBoardController::class,"index"]);