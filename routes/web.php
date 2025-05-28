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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

route::get('cliente/add', [App\Http\Controllers\clienteController::class, 'add'])->name('add-cliente');
route::post('cliente/add', [App\Http\Controllers\clienteController::class, 'store'])->name('store-cliente');

route::get('cliente/list', [App\Http\Controllers\clienteController::class, 'list'])->name('list-cliente');

route::get('cliente/remove/{id}', [App\Http\Controllers\clienteController::class, 'remove'])->name('remove-cliente');


