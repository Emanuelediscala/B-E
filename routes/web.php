<?php

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

use App\Http\Controllers\Admin\GameClassController;
use App\Http\Controllers\Admin\DashboardController; //<---- Import del controller precedentemente creato!


/* ... */

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
	
	// Admin Post CRUD
	Route::resource('gameclasses', GameClassController::class);
});



require __DIR__.'/auth.php';
