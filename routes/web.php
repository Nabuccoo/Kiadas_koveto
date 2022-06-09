<?php

use App\Http\Controllers\ExpenseTrackerController;
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


Route::get('/dashboard', [ExpenseTrackerController::class, 'index'] ) ->middleware(['auth'])->name('dashboard');
Route::get('/tracker', [ExpenseTrackerController::class, 'tracker'] ) ->middleware(['auth'])->name('tracker');
Route::post('/tracker', [ExpenseTrackerController::class, 'store']) ->middleware(['auth'])->name('tracker.store');
Route::get('/admin', [ExpenseTrackerController::class, 'admin'] ) ->middleware(['auth'])->name('admin');
require __DIR__.'/auth.php';
