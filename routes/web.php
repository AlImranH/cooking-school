<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/message', [FrontendController::class, 'messageList'])->name('message.index');
Route::post('/message', [FrontendController::class, 'message'])->name('message.store');
Route::delete('/message/delete/{id}', [FrontendController::class, 'destroy'])->name('message.destroy');

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('slider', SliderController::class);
    Route::resource('image', ImageController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('video', VideoController::class);
    Route::resource('team', TeamController::class);
    Route::resource('contact', ContactController::class);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
