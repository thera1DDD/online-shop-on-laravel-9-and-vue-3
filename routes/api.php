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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/admin/{user}',\App\Http\Controllers\API\Admin\ShowController::class);

Route::post('/products',\App\Http\Controllers\API\Product\IndexController::class);
Route::get('/products/filters',\App\Http\Controllers\API\Product\FIlterListController::class);
Route::get('/products/{camera}',\App\Http\Controllers\API\Product\ShowController::class);

Route::post('/recorder',\App\Http\Controllers\API\Recorder\IndexController::class);
Route::get('/recorder/filters',\App\Http\Controllers\API\Recorder\FIlterListController::class);
Route::get('/recorder/{recorder}',\App\Http\Controllers\API\Recorder\ShowController::class);

Route::post('/hdd',\App\Http\Controllers\API\Hdd\IndexController::class);
Route::get('/hdd/filters',\App\Http\Controllers\API\Hdd\FIlterListController::class);
Route::get('/hdd/{hdds}',\App\Http\Controllers\API\Hdd\ShowController::class);

Route::post('/pppoe',\App\Http\Controllers\API\PPPoe\IndexController::class);
Route::get('/pppoe/filters',\App\Http\Controllers\API\PPPoe\FIlterListController::class);
Route::get('/pppoe/{hdds}',\App\Http\Controllers\API\PPPoe\ShowController::class);

Route::post('/service',\App\Http\Controllers\API\Service\IndexController::class);
Route::get('/service/filters',\App\Http\Controllers\API\Service\FIlterListController::class);
Route::get('/service/{services}',\App\Http\Controllers\API\Service\ShowController::class);

Route::post('/cable',\App\Http\Controllers\API\Cable\IndexController::class);
Route::get('/cable/filters',\App\Http\Controllers\API\Cable\FIlterListController::class);
Route::get('/cable/{cables}',\App\Http\Controllers\API\Cable\ShowController::class);


Route::post('/intercom',\App\Http\Controllers\API\Intercom\IndexController::class);
Route::get('/intercom/filters',\App\Http\Controllers\API\Intercom\FIlterListController::class);
Route::get('/intercom/{intercoms}',\App\Http\Controllers\API\Intercom\ShowController::class);


Route::post('/registration',\App\Http\Controllers\API\Registration\IndexController::class);
Route::post('/auth',\App\Http\Controllers\API\Auth\IndexController::class);

//order stuff
Route::post('/postOrder', \App\Http\Controllers\API\Order\OrderController::class);
Route::post('/postPosition', \App\Http\Controllers\API\Order\PositionController::class);
//

//myAccount stuff
Route::group(['prefix' => 'myAccount'], function () {
    Route::get('/getOrders/{usersId}',[App\Http\Controllers\API\MyAccount\IndexController::class,'getOrders']);

});








