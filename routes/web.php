<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\TheatreController;
use App\Http\Controllers\Admin\AdminDashboardController;

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

Route::get('/dashboard', function (Request $request) {
    $usertype = Auth::user()->user_type;
    if($usertype == 0){
        return AdminDashboardController::navigate($request);
    }else{
        return view('dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/theatres', function() {
    $usertype = Auth::user()->user_type;
    if($usertype == 0){
        return TheatreController.createTheatre();
    }
    else{
        return view('dashboard');
    }
})->middleware(['auth','verified'])->name('addTheatre');


Route::post("/theatres/addTheatre", [TheatreController::class, 'createTheatre'])->middleware(['auth','verified']);



require __DIR__.'/auth.php';
