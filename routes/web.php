<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PrincipalController;
use  App\Http\Controllers\ContatosController;
use  App\Http\Controllers\SobreNosController;
use  App\Http\Controllers\FornecedorController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::resource('sites', SiteController::class);
Route::get('/', [PrincipalController::class, 'index'])->name('site.index');
Route::get('/contato', [ContatosController::class, 'index'])->name('site.contato');
Route::post('/contato', [ContatosController::class, 'index'])->name('site.contato');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobrenos');

/* função de callback */
Route::get('/login/{nome}/{sobrenome}/{idade}/{mensagem?}', function (string $nome, string $sobrenome, int $idade, string $msg = "mensagem não informada") {
    return 'Login (função de callback) ' . $nome . ' ' . $sobrenome . ' ' . $idade . ' ' . $msg;
})->name('site.login');

Route::get('/contato/{nome}/{categoria_id}', function (string $nome = 'desconhecido', int $categoria_id = 1) {
        return "estamos aqui:   $nome - $categoria_id ";
    }
)->where('categoria_id' , '[0-8]+');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return 'fornecedores';
    })->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/rota1', function () {
    echo 'rota 1';
})->name('site.rota1');

Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

/* Route::redirect('/rota2', '/rota1'); */

Route::get('/teste/{p1}/{p2}', [PrincipalController::class , 'teste'])->name('teste');
Route::get('/fornecedor', [FornecedorController::class , 'index'])->name('fornecedor');

Route::fallback(function () {
    echo 'a routa acessada não existe,. <a href="' . route('site.index') . '"> clique aqui </a> para ir para a pagina inicial';
});
