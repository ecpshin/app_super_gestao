<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductDetailController;
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
Route::prefix('/site')->group(function()
{
    Route::get('/', 'PrincipalController@index')->name('site.index');
    Route::get('/sobrenos', 'AboutController@about')->name('site.about');
    Route::get('/contato', 'ContactController@create')->name('site.contact');
    Route::post('/contato', 'ContactController@store')->name('site.store');
    Route::get('/contatos', "ContactController@index")->name('site.contacts');
    Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
    Route::post('/login', [LoginController::class, 'autenticar'])->name('site.autenticar');
});

Route::prefix('/app')->middleware('autenticacao')->group(function()
{
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/cliente', 'ClientsController@index')->name('app.client');
    Route::get('/produto', 'ProductsController@index')->name('app.product');

    //Rotas fornecedores
    Route::get('/fornecedores', 'SuppliersController@index')->name('supplier.index');
    Route::get('/fornecedores/pesquisar', 'SuppliersController@search')->name('supplier.search');
    Route::get('/fornecedor/create', 'SuppliersController@create')->name('supplier.create');
    Route::get('/fornecedor/{supplier}/show', 'SuppliersController@show')->name('supplier.show');
    Route::get('/fornecedor/{supplier}/edit', 'SuppliersController@edit')->name('supplier.edit');
    Route::post('/fornecedores/listar', 'SuppliersController@listar')->name('app.supplier.listar');
    Route::get('/fornecedores/listar', 'SuppliersController@listar')->name('app.supplier.listar');
    Route::post('/fornecedor/store', 'SuppliersController@store')->name('supplier.store');
    Route::patch('/fornecedor/{supplier}/update', 'SuppliersController@update')->name('supplier.update');
    Route::delete('/fornecedor/{supplier}/delete', 'SuppliersController@update')->name('supplier.delete');

    //produtos
    Route::get('/produtos', 'ProductsController@index')->name('produtos.index');
    Route::get('/produtos/create', 'ProductsController@create')->name('produtos.create');
    Route::post('/produtos/create', 'ProductsController@store')->name('produtos.store');
    Route::get('/produtos/{product?}/show', 'ProductsController@show')->name('produtos.show');
    Route::get('/produtos/{product?}/edit', 'ProductsController@edit')->name('produtos.edit');
    Route::patch('/produtos/{product?}', 'ProductsController@update')->name('produtos.update');
    Route::delete('/produtos/{product?}', 'ProductsController@destroy')->name('produtos.delete');
    Route::get('/produtos/pesquisar', 'ProductsController@pesquisar')->name('produtos.pesquisar');
    Route::get('/produtos/listar', 'ProductsController@listar')->name('produtos.listar');
    Route::post('/produtos/listar', 'ProductsController@listar')->name('produtos.listar');

    //produtos detalhe
    Route::resource('produtos-detalhe', 'ProductDetailController');

    Route::get('/logout', 'LoginController@logout')->name('app.logout');

    
});

Route::fallback(function (){
    echo 'Esta rota não existe. <a href="'.route('site.index') . '">Clique aqui</a>';
});