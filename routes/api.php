<?php


use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ConditionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('animals')->group(function () {
    Route::get('/', [AnimalController::class, 'index']);
});

Route::prefix('animal')->group(function () {
    Route::get('/{condition}', [ConditionController::class, 'show']);
    Route::post('/{animal}', [ConditionController::class, 'store']);
    Route::post('/{condition}/grow', [ConditionController::class, 'grow']);
});


