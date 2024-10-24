<?php

use App\Http\Controllers\ProfileController;
use App\Models\Endereco;
use \App\Models\Venda;
use \App\Models\Cliente;
use \App\Models\Categoria;
use \App\Models\Produto;
use \App\Models\Vendedor;
use \App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendedorsController;
use \App\Http\Controllers\VendaController;
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

//ROUTE INICIAL
Route::get('/', function () {
    return view('welcome');
});

//ROUTE PARA DASHBOARD ATRAVÉS DE AUTENTIFICAÇÃO
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//REGISTRO, LOGIN, AUTENTIFICAÇÃO
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//====================== ROUTE PARA REGISTRO DE VENDAS ======================
Route::resource('/vendas', VendaController::class);
Route::get('/vendas.index', function () {
    $vendas= Venda::all();
    return view('/vendas.index', compact('vendas'));
});
Route::get('/vendas.create', function () {
    $clientes = Cliente::all();
    $produtos = Produto::all();
    $vendedors = Vendedor::all();
    $vendas= Venda::all();
    return view('/vendas.create', compact('clientes', 'produtos', 'vendedors','vendas'));
});
Route::get('/vendas.update', function ($id) {
    $clientes = Cliente::all();
    $produtos = Produto::all();
    $vendedors = Vendedor::all();
    $venda = Venda::findOrFail($id);
    return view('/vendas.update', compact('clientes', 'produtos', 'vendedors','venda'));
});
Route::get('/vendas.show', function ($id) {
    $venda = Venda::findOrFail($id);
    return view('/vendas.show', compact('venda'));
});


// ====================== ROUTE PARA REGISTRO DE ENDEREÇOS ======================
Route::resource('/enderecos', EnderecosController::class);
Route::get('/enderecos.index', function () {
    $enderecos= Endereco::all();
    return view('/enderecos.index', compact('enderecos'));
});
Route::get('/enderecos.create', function () {
    $enderecos= Endereco::all();
    return view('/enderecos.create', compact('enderecos'));
});
Route::get('/enderecos.update', function ($id) {
    $endereco= Endereco::findOrFail($id);
    return view('/enderecos.update', compact('endereco'));
});
Route::get('/enderecos.show', function ($id) {
    $endereco= Endereco::findOrFail($id);
    return view('/enderecos.show', compact('endereco'));
});


// ====================== ROUTE PARA REGISTRO DE CLIENTES ======================
Route::resource('/clientes', ClientesController::class);
Route::get('/clientes.index', function () {
    $clientes = Cliente::all();
    return view('/clientes.index', compact('clientes'));
});
Route::get('/clientes.create', function () {
    $enderecos= Endereco::all();
    $clientes = Cliente::all();
    return view('/clientes.create', compact('enderecos','clientes'));
});
Route::get('/clientes.update', function ($id) {
    $enderecos= Endereco::all();
    $cliente = Cliente::findOrFail($id);
    return view('/clientes.update', compact('enderecos', 'cliente'));
});
Route::get('/clientes.show', function ($id) {
    $cliente = Cliente::findOrFail($id);
    return view('/clientes.show', compact('cliente'));
});


// ====================== ROUTE PARA REGISTRO DE CATEGORIAS ======================
Route::resource('/categorias', CategoriasController::class);
Route::get('/categorias.index', function () {
    $categorias = Categoria::all();
    return view('/categorias.index', compact('categorias'));
});
Route::get('/categorias.create', function () {
    $categorias = Categoria::all();
    return view('/categorias.create', compact('categorias'));
});
Route::get('/categorias.update', function ($id) {
    $categoria = Categoria::findOrFail($id);
    return view('/categorias.update', compact('categoria'));
});
Route::get('/categorias.show', function ($id) {
    $categoria = Categoria::findOrFail($id);
    return view('/categorias.show', compact('categoria'));
});


// ====================== ROUTE PARA REGISTRO DE PRODUTOS ======================
Route::resource('/produtos', ProdutosController::class);
Route::get('/produtos.index', function () {
    $produtos = Produto::all();
    $categorias = Categoria::all();
    return view('/produtos.index', compact('produtos','categorias'));
});
Route::get('/produtos.create', function () {
    $categorias = Categoria::all();
    $produtos = Produto::all();
    return view('/produtos.create', compact('categorias','produtos'));
});
Route::get('/produtos.update', function ($id) {
    $categorias = Categoria::all();
    $produto = Produto::findOrFail($id);
    return view('/produtos.update', compact('categorias','produto'));
});
Route::get('/produtos.show', function ($id) {
    $produto = Produto::findOrFail($id);
    $categorias = Categoria::all();
    return view('/produtos.show', compact('produto','categorias'));
});


// ====================== ROUTE PARA REGISTRO DE VENDEDORES ======================
Route::resource('/vendedors', VendedorsController::class);
Route::get('/vendedors.index', function () {
    $vendedors = Vendedor::all();
    $users = User::all();
    return view('/vendedors.index', compact('vendedors','users'));
});
Route::get('/vendedors.create', function () {
    $users = User::all();
    $vendedors = Vendedor::all();
    return view('/vendedors.create', compact('users','vendedors'));
});
Route::get('/vendedors.update', function ($id) {
    $users = User::all();
    $vendedor = Vendedor::findOrFail($id);
    return view('/vendedors.update', compact('users','vendedor'));
});
Route::get('/vendedors.show', function ($id) {
    $vendedor = Vendedor::findOrFail($id);
    $users = User::all();
    return view('/vendedors.show', compact('vendedor','users'));
});

require __DIR__.'/auth.php';
