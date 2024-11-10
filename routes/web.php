<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\FeedbackController;

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');  
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store'); 
Route::get('/feedback/{Feedback}', [FeedbackController::class, 'show'])->name('feedback.show'); 
Route::get('/feedback/{Feedback}/edit', [FeedbackController::class, 'edit'])->name('feedback.edit');
Route::put('/feedback/{Feedback}', [FeedbackController::class, 'update'])->name('feedback.update'); 
Route::delete('/feedback/{Feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy'); 
