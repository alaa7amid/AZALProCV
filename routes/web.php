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
    //basic information
    Route::get('user/basicInfo',[frontendController::class,'info'])->name('cerateCV');
    Route::post('user/basicInfo/store',[frontendController::class,'storeBaiscInfo'])->name('storeBaiscInfo');

    //profile information
    Route::get('user/profile',[frontendController::class,'profilePage'])->name('profilePage');
    Route::post('user/profile/store',[frontendController::class,'storeProfileInfo'])->name('storeProfileInfo');

    //edit basic information
    Route::get('user/basicInfo/edit',[frontendController::class,'editBasicInfo'])->name('editBasicInfo');
    Route::post('user/basicInfo/update',[frontendController::class,'updateBaiscInfo'])->name('updateBaiscInfo');
});



Route::get('/',[frontendController::class,'index'])->name('dashboard');
