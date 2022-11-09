<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/Profile', [\App\Http\Controllers\Api\UserController::class, 'Profile']);
    Route::post('/UpdateProfile', [\App\Http\Controllers\Api\UserController::class, 'update']);
    Route::get('/logout', [\App\Http\Controllers\Api\UserController::class, 'logout']);


    Route::get('/Services', [\App\Http\Controllers\Api\ServiceContorller::class, 'index']);
    Route::get('/ServicesTypes', [\App\Http\Controllers\Api\ServiceContorller::class, 'ServicesTypes']);
    Route::post('/checkServiceCost', [\App\Http\Controllers\Api\ServiceContorller::class, 'checkServiceCost']);


    Route::post('SendTransaction', [\App\Http\Controllers\Api\TransactionsController::class, 'SendTransaction']);
    Route::post('getCode', [\App\Http\Controllers\Api\TransactionsController::class, 'getCode']);
    Route::post('CancelTransaction', [\App\Http\Controllers\Api\TransactionsController::class, 'CancelTransaction']);

});

Route::post('TransactionDetail', [\App\Http\Controllers\Api\TransactionsController::class, 'TransactionDetail']);

Route::group(['middleware' => 'auth:driver'], function () {
    Route::post('AcceptTransaction', [\App\Http\Controllers\Api\TransactionsController::class, 'AcceptTransaction']);
    Route::post('StartTransaction', [\App\Http\Controllers\Api\TransactionsController::class, 'StartTransaction']);
    Route::post('FinishTransaction', [\App\Http\Controllers\Api\TransactionsController::class, 'FinishTransaction']);
    Route::post('SendPayed', [\App\Http\Controllers\Api\TransactionsController::class, 'SendPayed']);

});

Route::post('/LoginDriver', [\App\Http\Controllers\Api\DriverController::class, 'login']);

Route::post('/LoginUser', [\App\Http\Controllers\Api\UserController::class, 'login']);
Route::post('/sendCode', [\App\Http\Controllers\Api\UserController::class, 'sendCode']);
Route::post('/RegisterUser', [\App\Http\Controllers\Api\UserController::class, 'store']);
Route::post('/forget_pass', [\App\Http\Controllers\Api\UserController::class, 'forget_pass']);
Route::post('/confirm_code', [\App\Http\Controllers\Api\UserController::class, 'confirm_code']);
Route::post('/ChangePass', [\App\Http\Controllers\Api\UserController::class, 'ChangePass']);
Route::get('/Setting', [\App\Http\Controllers\Api\UserController::class, 'Setting']);

Route::post('/Cities', [\App\Http\Controllers\Api\CityController::class, 'index']);
Route::get('/Countries', [\App\Http\Controllers\Api\CountryController::class, 'index']);

