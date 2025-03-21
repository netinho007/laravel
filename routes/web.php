<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('view-inicio');
Route::get('/registrar', [App\Http\Controllers\Registrar::class, 'registrar'])->name('view-registrar');
Route::get('/adocao', [App\Http\Controllers\Adocao::class, 'adocao'])->name('view-adocao');
Route::get('/cadastrar-animal', [App\Http\Controllers\CadastrarAnimal::class, 'cadastrarAnimal'])->name('view-cadastro-animal');




