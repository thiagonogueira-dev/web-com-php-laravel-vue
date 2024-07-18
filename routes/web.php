<?php

use Faker\Guesser\Name;
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

/* sem utilizar um controller

Route::get('/', function () {
    return 'Página principal';
});

*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function() { return 'login'; })->name('site.login');


Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function() { return 'produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. Clique <a href="'. route('site.index') . '"> aqui </a> para ir para a página inicial.';
});















/* validação
Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1 // 1 - Informação
    ) {
        echo 'Aqui, nome: ' . $nome . ' <br>Categoria: ' . $categoria_id;
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]{3}'); // categoria com id entre 0 e 9 com pelo menos um digito e nome com pelo menos 3 caracteres
*/
