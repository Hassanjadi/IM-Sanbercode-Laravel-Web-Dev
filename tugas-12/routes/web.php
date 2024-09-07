<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/table', function() {
    return view('page.table');
});

Route::get('/data-tables', function() {
    return view('page.data-table');
});

// CRUD

// C => Create Data
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);

// R => Read Data
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);

// U => Update Data
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{id}', [CategoryController::class, 'update']);


// D => Delete Data
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);