<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/reservas/home/show/{hotel}',['as'=>'reservas.home.show','uses'=>'HomeController@show']);


Auth::routes();
Route::get('/register/admin/adicionar', ['as'=>'register.admin.adicionar','uses'=>'UserController@showAdminRegistrationForm']);
Route::post('/register/admin/salvar',['as'=>'register.admin.salvar','uses'=>'UserController@store']);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'],function(){
    Route::get('/reservas/pessoa',['as'=>'reservas.pessoa','uses'=>'PessoaController@index']);
    Route::get('/reservas/pessoa/adicionar',['as'=>'reservas.pessoa.adicionar','uses'=>'PessoaController@create']);
    Route::post('/reservas/pessoa/salvar',['as'=>'reservas.pessoa.salvar','uses'=>'PessoaController@store']);
    Route::get('/reservas/pessoa/editar/{pessoa}',['as'=>'reservas.pessoa.editar','uses'=>'PessoaController@edit']);
    Route::put('/reservas/pessoa/atualizar/{pessoa}',['as'=>'reservas.pessoa.atualizar','uses'=>'PessoaController@update']);
    Route::get('/reservas/pessoa/deletar/{pessoa}',['as'=>'reservas.pessoa.deletar','uses'=>'PessoaController@destroy']);
});