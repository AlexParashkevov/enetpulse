<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TournamentController;

use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tournaments', [TournamentController::class, 'index']);
