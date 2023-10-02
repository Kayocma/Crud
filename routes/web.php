<?php

use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('{id}/update', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('{id}/delete', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::get('{id}/show', [ClienteController::class, 'show'])->name('clientes.show');