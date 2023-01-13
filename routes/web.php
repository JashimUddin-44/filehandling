<?php

use App\Http\Controllers\image\ImageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[ImageController::class,'form'])->name('image.form');
Route::post('/image-store',[ImageController::class,'store'])->name('image.store');
Route::get('/image-view',[ImageController::class,'view'])->name('image.list');
Route::get('/image-edit/{id}',[ImageController::class,'edit'])->name('image.edit');
Route::put('/image-update/{id}',[ImageController::class,'update'])->name('image.update');
Route::get('/image-delete/{id}',[ImageController::class,'delete'])->name('image.delete');
