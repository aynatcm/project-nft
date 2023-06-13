<?php

use App\Http\Controllers\CreateItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/images', [ImageController::class, 'store'])->name('image.store');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/dashboard', function () {
//    return view('welcome');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//    Route::get('/create', [CreateItemController::class, 'index'])->name('create');

    Route::get('/create', [CreateItemController::class, 'create'])->name('create');
    Route::post('/create', [CreateItemController::class, 'store'])->name('create-item.store');
});

//Route::get('/create-item', function () {
//    return view('create-item');
//})->middleware(['auth', 'verified'])->name('create');


Route::get('/{user:name}/items/{item}', [CreateItemController::class, 'show'])->name('show');

Route::get('/author/{user:name}', [CreateItemController::class, 'index'])->name('author');

require __DIR__ . '/auth.php';
