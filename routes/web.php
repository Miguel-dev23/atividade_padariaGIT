<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bakery', [PrincipalController::class, 'bakery']);

