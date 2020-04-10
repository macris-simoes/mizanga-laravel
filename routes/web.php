<?php

use Illuminate\Support\Facades\Route;


Route::get('/home','HomeController@index');
Route::get('/inscricao-usuario','InscricaoController@inscricaoIndex');
Route::post('/inscricao-usuario','InscricaoController@inscricaoSubmitPost');
Route::get('/instrucoes-inscricao','InscricaoController@inscricaoInstrucao');
//envio de form//  Route::post('/inscricao-usuario','InscricaoController@inscricaoSubmitPost');

//-----------CONTATO------------
Route::get('/contato','ContatoController@contatoIndex');
//envio de form// Route::post('/contato', 'ContatoController@contatoSubmitPost');

//-----------LINKS------------
Route::get('/criterios-trabalho','LinksController@criteriosTrabalho');
Route::get('/instrucao-avaliadores','LinksController@instrucaoAvaliadores');

//----------LOGIN--------------
Route::get('/login','LoginController@loginIndex')->name('login');
//envio de form// Route::post('/login', 'ContatoController@loginSubmitPost');

//------------INSCRITO------------
Route::get('/inscrito-home','InscritoController@inscritoInfo');
Route::get('/inscrito-certificados','InscritoController@certificados');
Route::get('/inscrito-enviar-trabalho','InscritoController@enviarTrabalho');
Route::get('/inscrito-trabalhos-cadastrados','InscritoController@trabalhosCadastrados');

//----------ADMIN GET-------------
Route::get('/admin-home','AdminController@adminHome');
Route::get('/admin-config-congresso','AdminController@adminCongresso');
Route::get('/admin-config-parecerista','AdminController@adminParecerista');
Route::get('/admin-config-inscrito','AdminController@adminInscrito');
Route::get('/admin-config-trabalho','AdminController@adminTrabalho');


//----------ADMIN POST-------------
Route::post('/admin','AdminController@adminInscritoSubmitPost');



//--------Parecerista----------
Route::get('/parecerista','PareceristaController@pareceristaIndex');
Route::post('/parecerista','PareceristaController@pareceristaSubmitPost');


Route::resource ('crud','CrudController');
//middleware group - habilitar no final, para acesso somente com login.

// route::middleware('auth')->group(function() {
//     Route::get('/parecerista','PareceristaController@pareceristaIndex');
//     Route::get('/admin','AdminController@adminIndex');
//     Route::get('/inscrito','InscritoController@inscritoIndex');
// });
