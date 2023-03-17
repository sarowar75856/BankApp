<?php

use App\Http\Controllers\Backend\AccountController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.layouts.partials.index');
    })->name('dashboard');

    // Donor
    Route::group(['prefix' => 'account', 'as' => 'account.', 'controller' => AccountController::class], function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'showCreateForm')->name('create');
        Route::post('/create', 'create');

        Route::get('/balance', 'balanceForm')->name('balance');
        Route::post('/balance', 'balance');

        Route::get('/balance/transfer', 'transferBalanceForm')->name('transfer');
        Route::post('/balance/transfer', 'transferBalance');

        Route::post('/balance/find', 'balanceShow')->name('show_balance');
        Route::get('/history', 'history')->name('history');
        Route::post('/history', 'historyShow');

    });

});
