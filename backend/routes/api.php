<?php

use App\Http\Controllers\RaceController;
use App\Http\Resources\TeamResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::apiResource('/races',RaceController::class)
    ->whereNumber("race")
;