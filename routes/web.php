<?php

use App\Http\Controllers\Backend\backendController;
use App\Http\Controllers\Frontend\frontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/',[frontendController::class,'index'])->name('dashboard');

Route::middleware('auth')->group(function(){
    // Route::get('user',[backendController::class,'index']);
    Route::get('user/basicInfo',[frontendController::class,'info'])->name('cerateCV');
    Route::post('user/store',[frontendController::class,'storeBaiscInfo'])->name('storeBaiscInfo');
    Route::get('user/profile',[frontendController::class,'profilePage'])->name('profilePage');

});



Route::get('/',[frontendController::class,'index'])->name('dashboard');
