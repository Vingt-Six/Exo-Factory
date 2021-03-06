<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeController;
use App\Models\Building;
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

Route::get('/', function () {
    $buildings = Building::all();
    return view('welcome', compact('buildings'));
});


Route::resource('buildings', BuildingController::class);

Route::resource('formations', FormationController::class);

Route::resource('types', TypeController::class);