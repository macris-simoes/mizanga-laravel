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


Route::get('/home', function () {
    return view('home');
});

Route::get('/inscricao-usuario', function () {
    return view('inscricao-usuario');
});
Route::get('/contato', function () {
    return view('contato');
});
//------------INSCRITOS------------
Route::get('/inscrito-enviar-trabalho', function () {
    return view('inscrito-enviar-trabalho');
});
Route::get('/inscrito-home', function () {
    return view('inscrito-home');
});
Route::get('/inscrito-trabalhos-cadastrados', function () {
    return view('inscrito-trabalhos-cadastrados');
});
Route::get('/instrucoes-inscricao', function () {
    return view('instrucoes-inscricao');
});
//-----------LINKS------------
Route::get('/criterios-trabalho', function () {
    return view('link-criterios-trabalho');
});
Route::get('/instrucao-avaliadores', function () {
    return view('link-instrucao-avaliadores');
});
//----------LOGIN--------------
Route::get('/login', function () {
    return view('login');
});
//----------ADMIN-------------
Route::get('/admin-config-inscrito', function () {
    return view('admin-config-inscrito');
});

Route::get('/admin-config-parecerista', function () {
    return view('admin-config-parecerista');
});
Route::get('/admin-config-trabalhos', function () {
    return view('admin-config-trabalhos');
});

Route::get('/gerenciar-parecerista', function () {
    return view('admin-gerenciar-parecerista');
});
Route::get('/admin-home', function () {
    return view('admin-home');
});
Route::get('/substituir-parecerista', function () {
    return view('admin-substituir-parecerista');
});
//--------Parecerista----------
Route::get('/parecerista-home', function () {
    return view('parecerista-home');
});
Route::get('/parecerista-vizualizar-trabalho', function () {
    return view('parecerista-vizualizar-trabalho');
});
Route::get('/avaliar-trabalho', function () {
    return view('parecerista-avaliar-trabalho');
});

Route::resource ('crud','CrudController');