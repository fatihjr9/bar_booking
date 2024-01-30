<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SeatsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Client
Route::get('/', function () { return view('client.index');});
Route::get('/payment', function () { return view('client.payment');});


// Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin/index', function () { return view('pages.template.index');})->name('dashboard');
    // Menu
    Route::get('/admin/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/admin/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/admin/menu/create', [MenuController::class, 'store'])->name('menu.store');
    // Menu Category
    Route::get('/admin/menu/create-category', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/admin/menu/create-category', [CategoryController::class, 'store'])->name('category.store');
    // Menu Package
    Route::get('/admin/menu/create-package', [PackageController::class, 'create'])->name('package.create');
    Route::post('/admin/menu/create-package', [PackageController::class, 'store'])->name('package.store');
    // 
    Route::delete('/admin/menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
    // Seats
    Route::get('/admin/seats', [SeatsController::class, 'index'])->name('seats.index');
    Route::get('/admin/seats/create', [SeatsController::class, 'create'])->name('seats.create');
    Route::post('/admin/seats/create', [SeatsController::class, 'store'])->name('seats.store');
    // Customer-Order
    Route::get('/admin/customer-order', function () { return view('pages.template.order');})->name('order.index');
});
