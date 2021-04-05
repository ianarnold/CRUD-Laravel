<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeoplesController;
use App\Http\Controllers\ProductsController;

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


//Rotas pra pessoas 
Route::get('/registerpeople', 
    [PeoplesController::class, 'registerPeopleView']
)->name('registerPeopleView')->middleware(['auth']);

Route::post('/registerpeople', [PeoplesController::class, 'registerPeople']
)->name('registerPeople')->middleware(['auth']);

Route::get('/listpeople', [PeoplesController::class, 'listPeopleView']
)->name('listPeopleView')->middleware(['auth']);


//Rotas para produtos
Route::get('/registerproduct', [ProductsController::class, 'registerProductView']
)->name('registerProductView')->middleware(['auth']);

Route::get('/listproduct', [ProductsController::class, 'listProductView']
)->name('listProductView')->middleware(['auth']);

Route::post('/registerproduct', [ProductsController::class, 'registerProduct']
)->name('registerProduct')->middleware(['auth']);



Route::get('/editproduct/{id}', [ProductsController::class, 'editProductView']
)->name('editProductView')->middleware(['auth']);

Route::post('/editproduct/{id}', [ProductsController::class, 'editProduct']
)->name('editProduct')->middleware(['auth']);


//AUTH
require __DIR__.'/auth.php';
