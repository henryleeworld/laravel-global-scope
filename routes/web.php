<?php

use App\Http\Controllers\GlobalScopeController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [GlobalScopeController::class, 'getUser']);
