<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacotesController;

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

Auth::routes();

//minhas rotas simples
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('sobre-nos', [HomeController::class, 'sobreNos'])->name('home.sobre');
Route::get('termos', [HomeController::class, 'termos'])->name('home.termos');
Route::get('contate-nos', [HomeController::class, 'contateNos'])->name('home.contato');












//minhas rotas protegidas
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    
    Route::get('/', [HomeController::class, 'admin'])->name('admin.index');
    //grupo pacotes
    Route::group(['prefix' => 'pacotes'], function () {
        //rotas simples get e post
        Route::get('/', [PacotesController::class, 'index'])->name('admin.pacotes.index');
        Route::get('create', [PacotesController::class, 'create'])->name('admin.pacotes.create');
        Route::post('store', [PacotesController::class, 'store'])->name('admin.pacotes.store');
        Route::get('edit/{pacote}', [PacotesController::class, 'edit'])->name('admin.pacotes.edit');
        Route::post('update/{pacote}', [PacotesController::class, 'update'])->name('admin.pacotes.update');
        Route::get('destroy/{pacote}', [PacotesController::class, 'destroy'])->name('admin.pacotes.destroy');
    });

    //grupo blogues
    Route::group(['prefix' => 'blogues'], function () {
        //rotas simples get e post
        Route::get('/', [BloguesController::class, 'index'])->name('admin.blogues.index');
        Route::get('create', [BloguesController::class, 'create'])->name('admin.blogues.create');
        Route::post('store', [BloguesController::class, 'store'])->name('admin.blogues.store');
        Route::get('edit/{blogue}', [BloguesController::class, 'edit'])->name('admin.blogues.edit');
        Route::post('update/{blogue}', [BloguesController::class, 'update'])->name('admin.blogues.update');
        Route::get('destroy/{blogue}', [BloguesController::class, 'destroy'])->name('admin.blogues.destroy');
    });

    //grupo depoimentos
    Route::group(['prefix' => 'depoimentos'], function () {
        //rotas simples get e post
        Route::get('/', [DepoimentosController::class, 'index'])->name('admin.depoimentos.index');
        Route::get('create', [DepoimentosController::class, 'create'])->name('admin.depoimentos.create');
        Route::post('store', [DepoimentosController::class, 'store'])->name('admin.depoimentos.store');
        Route::get('edit/{depoimento}', [DepoimentosController::class, 'edit'])->name('admin.depoimentos.edit');
        Route::post('update/{depoimento}', [DepoimentosController::class, 'update'])->name('admin.depoimentos.update');
        Route::get('destroy/{depoimento}', [DepoimentosController::class, 'destroy'])->name('admin.depoimentos.destroy');
    });




});
