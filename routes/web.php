<?php

use App\Http\Controllers\GoogleSheetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GoogleSheetController::class, 'index']);
