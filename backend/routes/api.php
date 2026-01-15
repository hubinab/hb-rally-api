<?php

use App\Http\Controllers\RaceController;
use App\Http\Controllers\TeamController;
use App\Http\Resources\TeamResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::apiResource('/races',RaceController::class)
    ->whereNumber("race")
    ->only(["index","show"])
;

Route::apiResource('/teams',TeamController::class)
    ->whereNumber("team")
    ->only(["index","show"])
;