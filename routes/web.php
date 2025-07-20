<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

 Route::get('/demo1', [DemoController::class, 'Simple_request']);
 Route::get('/demo2/{name}/{age}', [DemoController::class, 'Url_prameters']);
 Route::get('/demo3', [DemoController::class, 'Json_body_request']);
 Route::get('/demo4', [DemoController::class, 'Json_body_request']);
 Route::get('/demo5', [DemoController::class, 'Header_request']);
 Route::get('/demo6', [DemoController::class, 'Header_request']);
 Route::get('/demo7/{name}/{age}', [DemoController::class, 'Multiple_request']);