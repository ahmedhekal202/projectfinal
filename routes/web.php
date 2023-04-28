<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\courseController;
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

Route::group(['nammespace'=>'admin'],function(){
Route::get('loginadmin',[AdminController::class,'create'])->name('adminlogin');    
Route::post('store',[AdminController::class,'adminAuthentication'])->name('adminstore');

  


});


//courses
Route::get('/courses',[courseController::class,'create']);
Route::post('/coursestore',[courseController::class,'store'])->name('coursestore');
