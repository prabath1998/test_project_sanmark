<?php

use App\Http\Controllers\RunnerController;
use App\Http\Controllers\SettingsController;
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

Route::get('/', function () {
    return view('index');
})->name('home');


//store runner's data
Route::post('/store', [RunnerController::class, 'store'])->name('store');

//view settings page
Route::get('/settings', [SettingsController::class, 'view'])->name('view');

//store settings
Route::post('/settings/save', [SettingsController::class, 'store'])->name('settings.save');
