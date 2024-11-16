<?php 

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AgendamentosController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRedirectController;
use App\Http\Controllers\AdminController;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Dashboard com Middleware de autenticação
Route::get('/dashboard', [AgendamentosController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Rota do perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__.'/auth.php';

// Feedback Routes
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/{Feedback}', [FeedbackController::class, 'show'])->name('feedback.show');
Route::get('/feedback/{Feedback}/edit', [FeedbackController::class, 'edit'])->name('feedback.edit');
Route::put('/feedback/{Feedback}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::delete('/feedback/{Feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');



// Página de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Enviar formulário de login (essa será a rota 'login.submit')
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Rota de logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/redirect', [UserRedirectController::class, 'redirectUser'])->middleware('auth')->name('redirect');

// Rota do painel de administração
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('tela_admin');

// Rota para a dashboard do usuário comum
Route::get('/dashboard', [AgendamentosController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');






