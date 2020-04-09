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
Route::get('/inscrito','InscritoController@inscritoIndex');

//----------ADMIN-------------
Route::get('/admin','AdminController@adminIndex');
Route::post('/admin','AdminController@adminInscritoSubmitPost');


//--------Parecerista----------
Route::get('/parecerista','PareceristaController@pareceristaIndex');

Route::resource ('crud','CrudController');

Route::post('/parecerista','PareceristaController@pareceristaSubmitPost');


//middleware group - habilitar no final, para acesso somente com login.

// route::middleware('auth')->group(function() {
//     Route::get('/parecerista','PareceristaController@pareceristaIndex');
//     Route::get('/admin','AdminController@adminIndex');
//     Route::get('/inscrito','InscritoController@inscritoIndex');
// });
