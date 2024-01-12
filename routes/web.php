<?php

// Controllers

use App\Http\Controllers\DeviceDataController;
use App\Http\Controllers\FeedingDataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\Security\RolePermission;
use App\Http\Controllers\Security\RoleController;
use App\Http\Controllers\Security\PermissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
// Packages
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

require __DIR__.'/auth.php';

//Pusher websocket Routes
Route::get('/pusher', [PusherController::class, 'index']);
Route::get('/broadcast', [PusherController::class, 'broadcast'])->name('broadcast');
Route::post('/receive', [PusherController::class, 'receive']);

//UI Pages Routs
Route::get('/', [HomeController::class, 'signin'])->name('signin');

Route::group(['middleware' => 'auth'], function () {

    // Dashboard Routes
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // FeedingData Routes
    Route::get('/getFeedingFrequency/{device_no}', [FeedingDataController::class, 'getFeedingFrequency'])->name('device.feedingFrequency');
    Route::get('/getWeeklyTemp/{device_no}', [FeedingDataController::class, 'getWeeklyTemp'])->name('device.temperatureData');

    // Device Data Routes
    Route::post('/deviceAdd', [DeviceDataController::class, 'store'])->name('device.add');
    Route::get('/device/{id}', [DeviceDataController::class, 'show'])->name('dashboard.device');
    Route::get('/deviceList', [DeviceDataController::class, 'deviceList'])->name('device.list');
    Route::get('/removeDevice/{id}', [DeviceDataController::class, 'destroy'])->name('device.destroy');

    // Users Module
    Route::resource('users', UserController::class);
});

//Auth pages Routs
Route::group(['prefix' => 'auth'], function() {
    Route::get('signin', [HomeController::class, 'signin'])->name('auth.signin');
    Route::get('signup', [HomeController::class, 'signup'])->name('auth.signup');
    Route::get('confirmmail', [HomeController::class, 'confirmmail'])->name('auth.confirmmail');
    Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('auth.lockscreen');
    Route::get('recoverpw', [HomeController::class, 'recoverpw'])->name('auth.recoverpw');
    Route::get('userprivacysetting', [HomeController::class, 'userprivacysetting'])->name('auth.userprivacysetting');
});

//Error Page Route
Route::group(['prefix' => 'errors'], function() {
    Route::get('error404', [HomeController::class, 'error404'])->name('errors.error404');
    Route::get('error500', [HomeController::class, 'error500'])->name('errors.error500');
    Route::get('maintenance', [HomeController::class, 'maintenance'])->name('errors.maintenance');
});