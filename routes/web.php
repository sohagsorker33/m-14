<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

 Route::get('/demo1', [DemoController::class, 'Simple_request']);
 Route::get('/demo2/{name}/{age}', [DemoController::class, 'Url_prameters']);