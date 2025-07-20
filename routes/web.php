<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

 Route::get('/demo1', [DemoController::class, 'Simple_request']);