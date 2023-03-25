<?php

use App\Http\Controllers\CelularesController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/celulares', [CelularesController::class, 'index'])->name('celulares.index');

Route::get('/celulares/novo', [GatosController::class, 'create'])->name('gatos.create');

Route::get('/celularess/{celular}', [GatosController::class, 'show'])->name('gatos.show');

Route::get('/celulares/{celular}/editar', [GatosController::class, 'edit'])->name('gatos.edit');

Route::post('/celularess/{celular}', [GatosController::class, 'store'])->name('gatos.store');

Route::put('/celulares/{celular}', [GatosController::class, 'update'])->name('gatos.update');

Route::delete('/celulares/{celular}', [GatosController::class, 'destroy'])->name('gatos.destroy');
