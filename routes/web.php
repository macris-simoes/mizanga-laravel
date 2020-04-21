<?php

use Illuminate\Support\Facades\Route;


Route::get('/home','HomeController@index');
Route::get('/inscricao-usuario','InscricaoController@inscricaoIndex');
Route::post('/inscricao-usuario','InscricaoController@inscricaoSubmitPost');
Route::get('/instrucoes-inscricao','InscricaoController@inscricaoInstrucao');

//-----------CONTATO------------
Route::get('/contato','ContatoController@contatoIndex');
//envio de form// Route::post('/contato', 'ContatoController@contatoSubmitPost');

//-----------LINKS------------
Route::get('/criterios-trabalho','LinksController@criteriosTrabalho');
Route::get('/instrucao-avaliadores','LinksController@instrucaoAvaliadores');

//----------LOGIN--------------
Route::get('/login','LoginController@loginIndex')->name('login');
Route::post('/login', 'LoginController@authenticate');

//------------INSCRITO------------



Route::get('/inscrito/{reg?}','InscritoController@inscritoInfo');

Route::middleware([])->group(function() {
    Route::prefix('inscrito/{id}')->group((function() {
        
        Route::get('/certificados','InscritoController@certificados');
        Route::prefix('trabalho')->group(function() {
            Route::get('/enviar','InscritoController@enviarTrabalho');
            Route::post('/enviar','InscritoController@enviarTrabalhoSubmitPost');
            Route::get('/cadastrados','InscritoController@trabalhosCadastrados');
        });
    }));
    
});

//----------ADMIN GET-------------
Route::get('/admin-home','AdminController@adminHome');
Route::get('/admin-config-congresso','AdminController@adminCongresso');
Route::post('/admin-config-congresso','AdminController@adminCongressoPost');
Route::get('/admin-config-eixos','AdminController@adminEixo');
Route::post('/admin-config-eixos','AdminController@adminEixoSubmitPost');

//----------ADMIN PARECERISTA GET-------------
Route::get('/admin-config-parecerista','AdminController@adminConfigParecerista');
Route::post('/admin-config-parecerista','AdminController@configPareceristaSubmitPost');
Route::get('/admin-parecerista','AdminController@adminParecerista'); 
Route::get('/admin-parecerista-showa','AdminController@adminPareceristaShowA');
Route::get('/admin-parecerista-showb','AdminController@adminPareceristaShowB');

Route::get('/admin-parecerista-substituir','AdminController@adminPareceristaSubstituir');


//----------ADMIN INSCRITO GET-------------
Route::get('/admin-config-inscrito','AdminController@adminConfigInscrito');
Route::get('/admin-inscrito','AdminController@adminInscrito');
Route::get('/admin-inscrito-showa/{id}','AdminController@adminInscritoShowA');
Route::get('/admin-inscrito-showb/{id}','AdminController@adminInscritoShowB');

//----------ADMIN TRABALHO GET-------------
Route::get('/admin-config-trabalho','AdminController@adminConfigTrabalho');
Route::get('/admin-trabalho','AdminController@adminTrabalho');
Route::get('/admin-trabalho-showa','AdminController@adminTrabalhoShowA');

//----------ADMIN POST-------------
Route::post('/admin','AdminController@adminInscritoSubmitPost');
Route::post('/admin-config-inscrito','AdminController@adminConfigInscritoPost');
Route::post('/admin-config-trabalho','AdminController@adminConfigTrabalhoPost');
Route::post('/admin-config-eixos/{id}','AdminController@adminConfigEixoDelete');
Route::post('/admin-config-inscrito/{id}','AdminController@adminConfigInscritoDelete');
Route::post('/admin-config-trabalho/{id}','AdminController@adminConfigTrabalhoDelete');


//--------Parecerista----------
Route::get('/parecerista','PareceristaController@pareceristaIndex');
Route::get('/parecerista-avaliar-trabalho','PareceristaController@pareceristaAvaliar');
Route::post('/parecerista-avaliar-trabalho','PareceristaController@pareceristaAvaliarSubmitPost');


Route::post('/parecerista','PareceristaController@pareceristaSubmitPost');

Route::post('/admin-cadastro','AdminController@cadastroAdminSubmitPost');
Route::get('/admin-cadastro','AdminController@cadastroAdmin');

Route::resource ('crud','CrudController');



