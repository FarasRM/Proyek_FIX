<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Userprofile;
use App\Http\Controllers\pdfController;


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


require __DIR__.'/auth.php';

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/Danendra', [PublicController::class, 'Danendra']);
Route::get('/Fahrizal', [PublicController::class, 'Fahrizal']);
Route::get('/Faras', [PublicController::class, 'Faras']);
Route::get('/CurriculumVitaes', [PublicController::class, 'CurriculumVitaes']);
Route::get('/MyCV', [PublicController::class, 'MyCV']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/cv-dashboard', [Userprofile::class, 'index'])->name('index');
Route::get('/user/{id}', [Userprofile::class, 'view'])->name('user.profile.view');
Route::get('/create', [Userprofile::class, 'create'])->name('user.profile.create');
Route::post('/store', [Userprofile::class, 'store'])->name('store');
Route::get('/edit/{id}', [Userprofile::class, 'edit'])->name('edit');
Route::post('/update', [Userprofile::class, 'update'])->name('update');
Route::post('/destroy/{id}', [Userprofile::class, 'destroy'])->name('destroy');
