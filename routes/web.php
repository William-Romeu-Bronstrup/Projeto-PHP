<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Event;

Route::get('/', [Event::class, 'index']);
Route::get('/Clientes/clientes', [Event::class, 'create']);
Route::post('/Clientes', [Event::class, 'store']);
Route::delete('/{id}', [Event::class, 'destroy']);
Route::get('/Clientes/{id}', [Event::class, 'edit']);
Route::put('/Clientes/{id}', [Event::class, 'update']);

Route::get('/Proprietarios', [Event::class, 'Proprietario']);
Route::get('/Proprietarios/proprietarios', [Event::class, 'createProprietario']);
Route::post('/Proprietarios', [Event::class, 'storeProprietario']);
Route::delete('/Proprietario/{id}', [Event::class, 'destroyProprietario']);
Route::get('/Proprietarios/{id}', [Event::class, 'editProprietario']);
Route::put('/Proprietarios/{id}', [Event::class, 'updateProprietario']);

Route::get('/Imoveis', [Event::class, 'Imoveis']);
Route::get('/Imoveis/imoveis', [Event::class, 'createImovel']);
Route::post('/Imoveis', [Event::class, 'storeImovel']);
Route::delete('/Imovel/{id}', [Event::class, 'destroyImovel']);
Route::get('/Imoveis/{id}', [Event::class, 'editImovel']);
Route::put('/Imoveis/{id}', [Event::class, 'updateImovel']);

Route::get('/Contratos', [Event::class, 'Contratos']);
Route::get('/Contratos/contratos', [Event::class, 'createContrato']);
Route::post('/Contratos', [Event::class, 'storeContrato']);
Route::delete('/Contrato/{id}', [Event::class, 'destroyContrato']);
Route::get('/Contratos/{id}', [Event::class, 'editContrato']);
Route::put('/Contratos/{id}', [Event::class, 'updateContrato']);
Route::get('/Contratos/Pagamentos/{id}', [Event::class, 'Pagar']);
Route::put('/Contratos/Pagamentos/{id}', [Event::class, 'Pagar2']);
