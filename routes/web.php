<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminTagsController;
use App\Http\Controllers\AdminTokoController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\DashboardController;
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

// USER ROUTEs
Route::get('/', [IndexController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/store', [TokoController::class, 'index']);

Route::get('/about', function () {
    return view('user.about', [
        'active' => 'about',
        'title' => 'About Us'
    ]);
});

Route::get('/feedback', [FeedbackController::class, 'index']);
Route::post('/feedback', [FeedbackController::class, 'store']);

// ADMIN ROUTEs
Route::get('/login', [AdminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);

Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/admin/listtoko', AdminTokoController::class)->middleware('auth');
Route::get('/admin/listtoko/edit/{id}', [AdminTokoController::class, 'edit'])->middleware('auth');
Route::post('/admin/listtoko/update/{id}', [AdminTokoController::class, 'update'])->middleware('auth');

Route::resource('/admin/listtags', AdminTagsController::class)->middleware('auth');
Route::get('/admin/listtags/edit/{id}', [AdminTagsController::class, 'edit'])->middleware('auth');
Route::post('/admin/listtags/update/{id}', [AdminTagsController::class, 'update'])->middleware('auth');

Route::resource('/admin/listmenu', AdminMenuController::class)->middleware('auth');
Route::get('/admin/listmenu/edit/{id}', [AdminMenuController::class, 'edit'])->middleware('auth');
Route::post('/admin/listmenu/update/{id}', [AdminMenuController::class, 'update'])->middleware('auth');
