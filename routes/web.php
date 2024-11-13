<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Models\Project;


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

Route::get('/', function () {
    $projects = Project::latest()->limit(3)->get();
    return view('pages.home', compact('projects'));
});

Route::resource('projects', ProjectController::class);

// Route::get('/dashboard', function () {
//     return view('admin.dashboard'); 
// })->middleware(['auth', 'role:admin'])->name('dashboard');

// Route::get('/adminprojects', function () {
//     $projects = Project::latest()->get();
//     return view('admin.adminprojects', compact('projects'));
// })->middleware(['auth', 'role:admin'])->name('dashboard');

// Route::get('/users', function () {
//     return view('admin.users'); 
// })->middleware(['auth', 'role:admin'])->name('users');

// Route::get('/statistics', function () {
//     return view('admin.statistics'); 
// })->middleware(['auth', 'role:admin'])->name('statistics');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

