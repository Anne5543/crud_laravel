<?php 

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AgendamentosController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRedirectController;
use App\Http\Controllers\AdminController;
use App\Models\Agendamento;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AgendamentosController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__.'/auth.php';

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/{Feedback}', [FeedbackController::class, 'show'])->name('feedback.show');
Route::get('/feedback/{Feedback}/edit', [FeedbackController::class, 'edit'])->name('feedback.edit');
Route::put('/feedback/{Feedback}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::delete('/feedback/{Feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
Route::resource('feedback', FeedbackController::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/redirect', [UserRedirectController::class, 'redirectUser'])->middleware('auth')->name('redirect');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('tela_admin');
Route::get('/dashboard', [AgendamentosController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/agendamentos', [AgendamentosController::class, 'index'])->name('agendamentos.index');
Route::get('/agendamentos/create', [AgendamentosController::class, 'create'])->name('agendamentos.create');
Route::post('/agendamentos', [AgendamentosController::class, 'store'])->name('agendamentos.store');
Route::get('/agendamentos/{agendamento}', [AgendamentosController::class, 'show'])->name('agendamentos.show');
Route::get('/agendamentos/{agendamento}/edit', [AgendamentosController::class, 'edit'])->name('agendamentos.edit');
Route::put('/agendamentos/{agendamento}', [AgendamentosController::class, 'update'])->name('agendamentos.update');
Route::delete('/agendamentos/{agendamento}', [AgendamentosController::class, 'destroy'])->name('agendamentos.destroy');


Route::get('/agendamentos-admin', function () {
    $agendamentos = Agendamento::all();
    return view('agendamentos_admin', compact('agendamentos'));
})->name('agendamentos.admin');

Route::get('/feedbacks-admin', function () {
    return view('feedbacks_admin'); 
})->name('feedbacks_admin');
Route::get('/funcionarios-admin', function () {
    return view('funcionarios_admin'); 
})->name('funcionarios_admin');
Route::get('/feedbacks-admin', [FeedbackController::class, 'feedbacksAdmin'])->name('feedbacks_admin');
Route::get('/dashboard', [FeedbackController::class, 'dashboard'])->name('dashboard');
Route::get('/feedbacks/{feedback}/edit', [FeedbackController::class, 'edit'])->name('feedbacks.edit');
Route::put('/feedbacks/{feedback}', [FeedbackController::class, 'update'])->name('feedbacks.update');
Route::get('agendamentos/{id}/edit', [AgendamentosController::class, 'edit'])->name('agendamentos.edit');
Route::get('agendamentos', [AgendamentosController::class, 'index'])->name('agendamentos.index');
Route::put('/agendamentos/{id}', [AgendamentosController::class, 'update'])->name('agendamentos.update');



Route::get('/funcionarios', [FuncionariosController::class, 'funcionarios'])->name('funcionarios.admin');
Route::get('/funcionarios/create', [FuncionariosController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionariosController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionarios/{id}', [FuncionariosController::class, 'show'])->name('funcionarios.show');
Route::get('/funcionarios/{id}/edit', [FuncionariosController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionariosController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionariosController::class, 'destroy'])->name('funcionarios.destroy');

Route::get('/funcionarios', [FuncionariosController::class, 'funcionarios'])->name('funcionarios_admin');












