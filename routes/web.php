<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//     return Inertia::render('Home', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// user
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/rating', [HomeController::class, 'store'])->name('rating.store');
Route::get('/detail-perumahan/{id}', [HomeController::class, 'showResidence'])->name('residence.show');
Route::get('/kontak/hubungi-saya', function () {
    return Inertia::render('Contact');
})->name('contact');

// admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/verif', [DashboardController::class, 'verif'])->name('verif');
// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
