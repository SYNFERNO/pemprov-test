<?php

use App\Http\Controllers\QuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/quest-b5', [QuestController::class, 'questb5']);
Route::get('/quest-b6', [QuestController::class, 'questb6']);
Route::get('/quest-b7', [QuestController::class, 'questb7']);
Route::get('/quest-b8', [QuestController::class, 'questb8']);
Route::get('/quest-overall', [QuestController::class, 'questoverall']);
