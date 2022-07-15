<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Artisan;
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
    return view('welcome');
});

Route::get('/get-audible-items', function () {
    Artisan::call('touch:audible');
});

Route::get('browse', [PageController::class, 'browse'])->name('browse_page');

Route::get('audiobook/{audiobook}', [PageController::class, 'detail'])->name('detail_page');
