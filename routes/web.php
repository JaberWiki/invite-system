<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActiveIndexController;
use App\Http\Controllers\ActiveStoreController;

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

Route::group(['middleware' => ['auth', 'activated']], function () {
    Route::get('/dashboard', function ( Request $request ) {
        dd($request->user()->active());
        return view('dashboard');
    })->name('dashboard');
});

Route::get('activate', ActiveIndexController::class)->name('activate');
Route::post('activate', ActiveStoreController::class);

require __DIR__.'/auth.php';
