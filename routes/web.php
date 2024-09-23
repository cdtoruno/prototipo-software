<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
// Rutas para la interfaz web
Route::get('/clothing-products/create', [ProductController::class, 'createClothingProductForm'])->name('clothing.create');
Route::post('/clothing-products/store', [ProductController::class, 'storeClothingProduct'])->name('clothing.store');

Route::get('/electronic-products/create', [ProductController::class, 'createElectronicProductForm'])->name('electronic.create');
Route::post('/electronic-products/store', [ProductController::class, 'storeElectronicProduct'])->name('electronic.store');

Route::get('/clothing-products/{id}/clone', [ProductController::class, 'cloneClothingProduct'])->name('clothing.clone');
Route::get('/electronic-products/{id}/clone', [ProductController::class, 'cloneElectronicProduct'])->name('electronic.clone');

Route::get('/original-products/create', [ProductController::class, 'createOriginalProductForm'])->name('original.create');
Route::post('/original-products/store', [ProductController::class, 'storeOriginalProduct'])->name('original.store');

Route::get('/', function () {
    return view('welcome');
});
