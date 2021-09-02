<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BloguesController;
use App\Http\Controllers\PacotesController;
use App\Http\Controllers\DepoimentosController;

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
Route::get('imagem/{imagem}', [HomeController::class, 'showImage'])->name('home.imagem');
Route::get('pacotes', [HomeController::class, 'pacotes'])->name('home.pacotes');
Route::get('pacotes/{pacote}', [HomeController::class, 'pacoteShow'])->name('home.pacotes.show');
Route::get('blogs', [HomeController::class, 'blogs'])->name('home.blogs');
Route::get('about', [HomeController::class, 'sobreNos'])->name('home.more.about');
Route::get('blogs/{blog}', [HomeController::class, 'blogShow'])->name('home.blogs.show');
Route::get('depoimentos', [Homecontroller::class, 'depoimentoShow'])->name('home.depoimentos.show');
Route::get('termos', [HomeController::class, 'termos'])->name('home.termos');
Route::get('contato', [HomeController::class, 'contateNos'])->name('home.contato');
Route::post('contato', [HomeController::class, 'sendEmail'])->name('home.email');





//minhas rotas protegidas
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    
    Route::get('/', [HomeController::class, 'admin'])->name('admin.index');
    //grupo pacotes
    Route::group(['prefix' => 'pacotes'], function () {
        //rotas simples get e post
        Route::get('/', [PacotesController::class, 'index'])->name('admin.pacotes.index');//listar todos os dados criados

        Route::get('create', [PacotesController::class, 'create'])->name('admin.pacotes.create');//link para ver o formulario de criaçao
        Route::post('store', [PacotesController::class, 'store'])->name('admin.pacotes.store');// link para salvar o formulario de criaçao

        Route::get('edit/{pacote}', [PacotesController::class, 'edit'])->name('admin.pacotes.edit');//link para ver o formulario de edição
        Route::post('update/{pacote}', [PacotesController::class, 'update'])->name('admin.pacotes.update');//link para salvar o formulario de ediçao

        Route::get('destroy/{pacote}', [PacotesController::class, 'destroy'])->name('admin.pacotes.destroy');//deletar um dado criado
        Route::get('delete/info/{info}', [PacotesController::class, 'deleteInfo'])->name('admin.pacotes.delete.info');
        Route::get('delete/preco/{preco}', [PacotesController::class, 'deletePricedate'])->name('admin.pacotes.delete.preco');
        Route::get('delete/imagem/{imagem}', [PacotesController::class, 'deleteImage'])->name('admin.pacotes.delete.imagem');
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
