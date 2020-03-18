<?php

use Illuminate\Support\Facades\Route;


Route::get('/home','HomeController@index');
Route::get('/inscricao-usuario','InscricaoController@inscricaoIndex');
Route::get('/instrucoes-inscricao','InscricaoController@inscricaoInstrucao');
//envio de form//  Route::post('/inscricao-usuario','InscricaoController@inscricaoSubmitPost');

//-----------CONTATO------------
Route::get('/contato','ContatoController@contatoIndex');
//envio de form// Route::post('/contato', 'ContatoController@contatoSubmitPost');

//-----------LINKS------------
Route::get('/criterios-trabalho','LinksController@criteriosTrabalho');
Route::get('/instrucao-avaliadores','LinksController@instrucaoAvaliadores');

//----------LOGIN--------------
Route::get('/login','LoginController@loginIndex');
//envio de form// Route::post('/login', 'ContatoController@loginSubmitPost');
        

//------------INSCRITO------------
Route::get('/inscrito','InscritoController@inscritoIndex');

//----------ADMIN-------------
Route::get('/admin','AdminController@adminIndex');

//DIABÉISS TIPSY//
// Route::get('/gerenciar', function () {
//     return view('admin-gerenciar-parecerista');
// });

//--------Parecerista----------
Route::get('/parecerista','PareceristaController@pareceristaIndex');

Route::resource ('crud','CrudController');


