<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', fn() => "<h1>Bem-vindo ao SITE ETEC!</h1>")->name('home');

Route::get('/contato', fn() => view('contato'))->name('contato');

Route::get('/contato/processa', [FormController::class, 'processa'])->name('form.processa');

Route::get('/cursos', fn() => "Página de Cursos")->name('cursos');
Route::get('/departamento', fn() => "Página de Departamento")->name('departamento');
Route::get('/login', fn() => "Página de Login")->name('login');

Route::fallback(fn() => "Página não encontrada (Erro 404)");

