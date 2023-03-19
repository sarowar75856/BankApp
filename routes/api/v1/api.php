<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\UserController;
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
|
| if you want to add api v2, add a v2 folder with api.php
| and update API_VERSION from .env file
|
*/

Route::post("login",[UserController::class,'index']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::group(['prefix' => 'account', 'as' => 'account.', 'controller' => AccountController::class], function () {

        Route::get('/', 'index');
        Route::post('/create', 'create');
        Route::post('/balance', 'balance');
        Route::post('/balance/transfer', 'transferBalance');
        Route::post('/history', 'historyShow');

    });

});
