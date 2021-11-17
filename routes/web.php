<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('usuarios', UsuarioController::class);
// Route::resource('maquetas','ViewController');


// llamados carpetas
//HOME
Route::get('home',function(){return view('home.index');})->name('home.index');

//CLIENTES
Route::get('clientes',function(){return view('clientes.index');})->name('clientes.index');
Route::get('clientes/create',function(){return view('clientes.create');})->name('clientes.create');
// Route::get('clientes/{id}',function($id){return view('clientes.show');})->name('clientes.show');
Route::get('clientes/show',function(){return view('clientes.show');})->name('clientes.show');
Route::get('clientes/campaign',function(){return view('clientes.campaign');})->name('clientes.campaign');
Route::get('clientes/showmilla',function(){return view('clientes.showmilla');})->name('clientes.showmilla');

//PROVEEDORES
Route::get('proveedores',function(){return view('proveedores.index');})->name('proveedores.index');
Route::get('proveedores/create',function(){return view('proveedores.create');})->name('proveedores.create');
//EXTRA
Route::get('proveedores/contact',function(){return view('proveedores.contact');})->name('proveedores.contact');//contacto
Route::get('proveedores/document',function(){return view('proveedores.document');})->name('proveedores.document');//doocumentos
Route::get('proveedores/tarifa',function(){return view('proveedores.tarifa');})->name('proveedores.tarifa');//princing tarifas
Route::get('proveedores/credit',function(){return view('proveedores.credit');})->name('proveedores.credit');//creditos
Route::get('proveedores/operation',function(){return view('proveedores.operation');})->name('proveedores.operation');//Operaciones
Route::get('proveedores/payment',function(){return view('proveedores.payment');})->name('proveedores.payment');//Facturacion/Pagos
Route::get('proveedores/cotizacion',function(){return view('proveedores.cotizacion');})->name('proveedores.cotizacion');//cotizaciones
Route::get('proveedores/tag',function(){return view('proveedores.tag');})->name('proveedores.tag');//tag

Route::get('proveedores/createcampaign',function(){return view('proveedores.createcampaign');})->name('proveedores.createcampaign');
Route::get('proveedores/config',function(){return view('proveedores.config');})->name('proveedores.config');

//REPORTES
Route::get('reportes',function(){return view('reportes.index');})->name('reportes.index');

//PARAMETRIA
Route::get('parametria',function(){return view('parametria.mantenedores');})->name('parametria.mantenedores');
Route::get('parametria/config',function(){return view('parametria.config');})->name('parametria.config');

//Keke(carpeta de test)
Route::get('keke',function(){return view('keke.index');})->name('keke.index');



