<?php

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
    return view('pages/index');
})->name('home');

// Route::group(['middleware' => ['admin']], function() {
//     Route::group(['middleware' => ['admin']], function () {
//         Route::get('PATH_DE_LA_ROUTE_AVEC_/', [AdminController::class, 'index'])->name('PATH_DE_LA_ROUTE_AVEC_.');
//     });
// });

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('pages/customer/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
