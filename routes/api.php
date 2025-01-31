<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoicesController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoicesController::class);

    
    Route::post('invoices/bulk', [InvoicesController::class, 'bulkStore']);
});