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

Route::get('/','\App\Http\Controllers\Controller@cadastroPessoa')->name('cadastro');
Route::get('/admin','\App\Http\Controllers\Controller@cadastroCaracteristica')->name('admin');
Route::get('/vacina','\App\Http\Controllers\Controller@buscar')->name('vacina');
Route::get('/lote','\App\Http\Controllers\Controller@lote')->name('lote');

Route::post('/admin/estadocivil','\App\Http\Controllers\Controller@cadastrarEstadoCivil')->name('estadocivil');
Route::post('/admin/escolaridade','\App\Http\Controllers\Controller@cadastrarEscolaridade')->name('escolaridade');
Route::post('/admin/religiao','\App\Http\Controllers\Controller@cadastrarReligiao')->name('religiao');
Route::post('/admin/racaCorEtnia','\App\Http\Controllers\Controller@cadastrarRacaCorEtnia')->name('racaCorEtnia');
Route::post('/admin/distrito','\App\Http\Controllers\Controller@cadastrarDistrito')->name('distrito');
Route::post('/admin/alergia','\App\Http\Controllers\Controller@cadastrarAlergia')->name('alergia');
Route::post('/admin/planosaude','\App\Http\Controllers\Controller@cadastrarPlanoSaude')->name('planosaude');
Route::post('/pessoa','\App\Http\Controllers\Controller@cadastrarPessoa')->name('pessoa');
Route::post('/vacina/cadastroFabricante','\App\Http\Controllers\Controller@cadastroFabricante')->name('cadastroFabricante');
Route::post('/vacina/cadastroDoenca','\App\Http\Controllers\Controller@cadastroDoenca')->name('cadastroDoenca');
Route::post('/vacina/cadastroVacina','\App\Http\Controllers\Controller@cadastroVacina')->name('cadastroVacina');
Route::post('/vacinacao','\App\Http\Controllers\Controller@pessoaVacina')->name('cadastroVacinaPessoa');
Route::post('/lote/cadastroLote','\App\Http\Controllers\Controller@cadastroLote')->name('cadastroLote');
Route::post('/vacina/vacinalote','\App\Http\Controllers\Controller@cadastroVacinaLotes')->name('vacinalote');



