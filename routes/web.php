<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
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
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/team', [WebsiteController::class, 'team'])->name('website.team');
Route::post('/contact', [WebsiteController::class, 'storeContact'])->name('website.storeContact');
Route::get('/job', [JobController::class, 'Job'])->name('website.job');
