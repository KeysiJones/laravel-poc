<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

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
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/pessoas/cadastrar', function () {
    return view('pessoas.cadastrar');
});

Route::post('/pessoas/cadastrar', [PessoaController::class, 'cadastrar']);

Route::get('/pessoas/listar', [PessoaController::class, 'listar'])
->middleware(['auth'])->name('listar-pessoas');

require __DIR__.'/auth.php';
