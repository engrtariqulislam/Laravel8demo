<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CategoryController;

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


    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

        $users = User::all();
        return view('dashboard',compact('users'));
    })->name('dashboard');

// Category Controller 
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'CategoryStore'])->name('store.category');
Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');
Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');