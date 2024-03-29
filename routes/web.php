<?php

use App\Http\Controllers\Controller;
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

// Training providers.
Route::controller(Controller::class)->group(function () {
    // Home page
    Route::get('/', 'index')->name('index');
    // Experience
    Route::get('/experience', 'experience')->name('experience');
    // Projects
    Route::get('/projects', 'projects')->name('projects');
});
