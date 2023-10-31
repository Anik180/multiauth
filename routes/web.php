<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\TaskController;

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

require __DIR__.'/auth.php';

// ------------admin route----------
Route::prefix('admin')->group(function (){
Route::get('/login',[AdminController::class, 'index'])->name('login_from');
Route::post('/login/owner',[AdminController::class, 'login'])->name('admin.login');
Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
Route::get('/logout',[AdminController::class, 'adminLogout'])->name('admin.logout')->middleware('admin');
Route::get('/task',[Admin\TaskController::class, 'index'])->name('admin.task')->middleware('admin');
});
// --------------end admin route--------
