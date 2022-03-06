<?php

use App\Http\Controllers\ActiveElectionController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/active-elections', [ActiveElectionController::class, 'index'])
    ->middleware('auth')
    ->name('active-elections');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
