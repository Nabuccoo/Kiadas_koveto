<?php

use App\Http\Controllers\AdminController;
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


Route::get('/admin', [AdminController::class, 'index']) ->middleware(['auth', 'user_role:admin'])->name('admin');
Route::post('/admin/category', [AdminController::class, 'store_category'])->middleware(['auth', 'user_role:admin'])->name('store_category');
Route::post('/admin/new_user', [AdminController::class, 'store_user'])->middleware(['auth', 'user_role:admin'])->name('store_user');

require __DIR__.'/auth.php';
