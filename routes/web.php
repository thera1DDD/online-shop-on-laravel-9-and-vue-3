<?php

use App\Http\Controllers\API\Telegram\IndexController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





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
Route::get('/', \App\Http\Controllers\CLient\IndexController::class)->name('main.index');
Route::group(['prefix' => 'admin','middleware'=>'admin'],function (){
    Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('admin.main.index');





Route::group(['prefix'=> 'categories'], function (){
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('category.delete');

});


Route::group(['prefix' => 'users'], function (){
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', \App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', \App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit', \App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{user}', \App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::patch('/{user}', \App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', \App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'cameras'], function (){
    Route::get('/', \App\Http\Controllers\IpCamera\IndexController::class)->name('camera.index');
    Route::get('/create', \App\Http\Controllers\IpCamera\CreateController::class)->name('camera.create');
    Route::post('/', \App\Http\Controllers\IpCamera\StoreController::class)->name('camera.store');
    Route::get('/{camera}/edit', \App\Http\Controllers\IpCamera\EditController::class)->name('camera.edit');
    Route::get('/{camera}', \App\Http\Controllers\IpCamera\ShowController::class)->name('camera.show');
    Route::patch('/{camera}', \App\Http\Controllers\IpCamera\UpdateController::class)->name('camera.update');
    Route::delete('/{camera}', \App\Http\Controllers\IpCamera\DeleteController::class)->name('camera.delete');
});
    Route::group(['prefix' => 'order'], function (){
    Route::get('/', \App\Http\Controllers\Order\IndexController::class)->name('order.index');
        Route::get('/create', \App\Http\Controllers\Order\CreateController::class)->name('order.create');
        Route::post('/', \App\Http\Controllers\Order\StoreController::class)->name('order.store');
        Route::get('/{order}/edit', \App\Http\Controllers\Order\EditController::class)->name('order.edit');
        Route::get('/{order}', \App\Http\Controllers\Order\ShowController::class)->name('order.show');
        Route::patch('/{order}', \App\Http\Controllers\Order\UpdateController::class)->name('order.update');
        Route::delete('/{order}', \App\Http\Controllers\Order\DeleteController::class)->name('order.delete');
    });
    Route::group(['prefix' => 'recorder'], function (){
        Route::get('/', \App\Http\Controllers\Recorder\IndexController::class)->name('recorder.index');
        Route::get('/create', \App\Http\Controllers\Recorder\CreateController::class)->name('recorder.create');
        Route::post('/', \App\Http\Controllers\Recorder\StoreController::class)->name('recorder.store');
        Route::get('/{recorder}/edit', \App\Http\Controllers\Recorder\EditController::class)->name('recorder.edit');
        Route::get('/{recorder}', \App\Http\Controllers\Recorder\ShowController::class)->name('recorder.show');
        Route::patch('/{recorder}', \App\Http\Controllers\Recorder\UpdateController::class)->name('recorder.update');
        Route::delete('/{recorder}', \App\Http\Controllers\Recorder\DeleteController::class)->name('recorder.delete');
    });
    Route::group(['prefix' => 'hdd'], function (){
        Route::get('/', \App\Http\Controllers\Hdd\IndexController::class)->name('hdd.index');
        Route::get('/create', \App\Http\Controllers\Hdd\CreateController::class)->name('hdd.create');
        Route::post('/', \App\Http\Controllers\Hdd\StoreController::class)->name('hdd.store');
        Route::get('/{hdd}/edit', \App\Http\Controllers\Hdd\EditController::class)->name('hdd.edit');
        Route::get('/{hdd}', \App\Http\Controllers\Hdd\ShowController::class)->name('hdd.show');
        Route::patch('/{hdd}', \App\Http\Controllers\Hdd\UpdateController::class)->name('hdd.update');
        Route::delete('/{hdd}', \App\Http\Controllers\Hdd\DeleteController::class)->name('hdd.delete');
    });

    Route::group(['prefix' => 'pppoe'], function (){
        Route::get('/', \App\Http\Controllers\PPPoe\IndexController::class)->name('pppoe.index');
        Route::get('/create', \App\Http\Controllers\PPPoe\CreateController::class)->name('pppoe.create');
        Route::post('/', \App\Http\Controllers\PPPoe\StoreController::class)->name('pppoe.store');
        Route::get('/{pppoe}/edit', \App\Http\Controllers\PPPoe\EditController::class)->name('pppoe.edit');
        Route::get('/{pppoe}', \App\Http\Controllers\PPPoe\ShowController::class)->name('pppoe.show');
        Route::patch('/{pppoe}', \App\Http\Controllers\PPPoe\UpdateController::class)->name('pppoe.update');
        Route::delete('/{pppoe}', \App\Http\Controllers\PPPoe\DeleteController::class)->name('pppoe.delete');
    });
    Route::group(['prefix' => 'service'], function (){
        Route::get('/', \App\Http\Controllers\Service\IndexController::class)->name('service.index');
        Route::get('/create', \App\Http\Controllers\Service\CreateController::class)->name('service.create');
        Route::post('/', \App\Http\Controllers\Service\StoreController::class)->name('service.store');
        Route::get('/{service}/edit', \App\Http\Controllers\Service\EditController::class)->name('service.edit');
        Route::get('/{service}', \App\Http\Controllers\Service\ShowController::class)->name('service.show');
        Route::patch('/{service}', \App\Http\Controllers\Service\UpdateController::class)->name('service.update');
        Route::delete('/{service}', \App\Http\Controllers\Service\DeleteController::class)->name('service.delete');
    });

    Route::group(['prefix' => 'cable'], function (){
        Route::get('/', \App\Http\Controllers\Cable\IndexController::class)->name('cable.index');
        Route::get('/create', \App\Http\Controllers\Cable\CreateController::class)->name('cable.create');
        Route::post('/', \App\Http\Controllers\Cable\StoreController::class)->name('cable.store');
        Route::get('/{cable}/edit', \App\Http\Controllers\Cable\EditController::class)->name('cable.edit');
        Route::get('/{cable}', \App\Http\Controllers\Cable\ShowController::class)->name('cable.show');
        Route::patch('/{cable}', \App\Http\Controllers\Cable\UpdateController::class)->name('cable.update');
        Route::delete('/{cable}', \App\Http\Controllers\Cable\DeleteController::class)->name('cable.delete');
    });

    Route::group(['prefix' => 'intercom'], function (){
        Route::get('/', \App\Http\Controllers\Intercom\IndexController::class)->name('intercom.index');
        Route::get('/create', \App\Http\Controllers\Intercom\CreateController::class)->name('intercom.create');
        Route::post('/', \App\Http\Controllers\Intercom\StoreController::class)->name('intercom.store');
        Route::get('/{intercom}/edit', \App\Http\Controllers\Intercom\EditController::class)->name('intercom.edit');
        Route::get('/{intercom}', \App\Http\Controllers\Intercom\ShowController::class)->name('intercom.show');
        Route::patch('/{intercom}', \App\Http\Controllers\Intercom\UpdateController::class)->name('intercom.update');
        Route::delete('/{intercom}', \App\Http\Controllers\Intercom\DeleteController::class)->name('intercom.delete');
    });

    Route::get('/getChatId', IndexController::class)->name('telegram.test');
});

Route::get('{page}',\App\Http\Controllers\Client\IndexController::class)->where('page','.*');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
