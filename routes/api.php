<?php

declare(strict_types=1);

use App\Http\Controllers\AppliancesController;
use App\Http\Controllers\BrandsController;
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

Route::get('health', function () {
    return response()->json(['message' => 'TEST-BACKEND']);
});

Route::group(['prefix' => 'appliances'], function () {
    Route::apiResource('', AppliancesController::class)->parameters([
        '' => 'id'
    ])->except(['store', 'update']);

    Route::post('', [AppliancesController::class, 'storeAppliance']);
    Route::put('{id}', [AppliancesController::class, 'updateAppliance']);
});

Route::group(['prefix' => 'brands'], function () {
    Route::apiResource('', BrandsController::class)->parameters([
        '' => 'id'
    ])->except(['store', 'update', 'destroy']);
});

Route::any('/{any}', function () {
    return response()->json(['message' => 'Invalid router'], 404);
})->where('any', '.*');
