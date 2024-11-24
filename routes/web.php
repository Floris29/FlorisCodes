<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Skills;
use App\Models\tools;

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
    $projects = Project::latest()->limit(3)->get();
    $skills = Skills::all();
    $tools = Tools::all();
    return view('pages.home', compact('projects', 'skills', 'tools'));
});