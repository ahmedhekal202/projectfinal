<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;

use App\Http\Controllers\itemController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//   Categorie
Route::get('categorie',[CategorieController::class, 'index'])->name('categorie');
Route::get('addCategorie',[CategorieController::class, 'create'])->name('addCategorie');
Route::post('storeCategorie',[CategorieController::class, 'store'])->name('storeCategories');
Route::get('showCategorie/{id}',[CategorieController::class, 'show'])->name('showCategories');


//items
Route::get('item',[itemController::class, 'index'])->name('item');
Route::get('additem',[itemController::class, 'create'])->name('additem');
Route::post('storeitem',[itemController::class, 'store'])->name('storeitem');
