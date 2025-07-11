<?php

use App\Http\Controllers\TBCController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TBCController::class, 'index']);
