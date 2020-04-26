<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', 'HomeController@index');
Route::get('/inscricao-usuario', 'InscricaoController@inscricaoIndex');
Route::post('/inscricao-usuario', 'InscricaoController@inscricaoSubmitPost');
Route::get('/instrucoes-inscricao', 'InscricaoController@inscricaoInstrucao');

//-----------CONTATO------------
Route::get('/contato', 'ContatoController@contatoIndex');

//-----------LINKS------------
Route::get('/criterios-trabalho', 'LinksController@criteriosTrabalho');
Route::get('/instrucao-avaliadores', 'LinksController@instrucaoAvaliadores');

//----------LOGIN--------------
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout')->name('logout');

//------------INSCRITO------------
Route::middleware(['auth'])->group(function () {
    Route::prefix('inscrito')->group((function () {
        Route::get('/', 'InscritoController@home')->name('inscrito.home');
        Route::get('/certificados', 'InscritoController@certificados')->name('inscrito.certificados');
        Route::prefix('trabalho')->group(function () {
            Route::get('/enviar', 'InscritoController@enviar')->name('trabalho.enviar');
            Route::post('/enviar', 'InscritoController@enviarPost')->name('trabalho.enviarpost');
            Route::get('/cadastrados', 'InscritoController@enviados')->name('trabalho.enviados');
        });
    }));
});


//--------Parecerista----------

route::prefix('parecerista')->group(function () {
    Route::get('/', 'PareceristaController@home')->name('parecerista.home');
    Route::prefix('trabalho')->group(function () {
        Route::get('/avaliar/{submission_id}', 'PareceristaController@avaliar')->name('parecerista.avaliar');
        Route::post('/avaliar/{submission_id}', 'PareceristaController@avaliarPost')->name('parecerista.avaliarpost');
    });
});


//----------ADMIN CONFIG CONGRESSO-------------
Route::get('/admin', 'AdminController@adminHome');
Route::get('/admin-config-congresso', 'AdminController@adminCongresso');
Route::post('/admin-config-congresso', 'AdminController@adminCongressoPost');
Route::get('/admin-config-eixos', 'AdminController@adminEixo');
Route::post('/admin-config-eixos', 'AdminController@adminEixoSubmitPost');

//----------ADMIN CONFIG PARECERISTA -------------
Route::get('/admin-config-parecerista', 'AdminController@adminConfigParecerista');
Route::post('/admin-config-parecerista', 'AdminController@configPareceristaSubmitPost');
Route::get('/admin-parecerista', 'AdminController@adminParecerista');
Route::post('/admin-parecerista', 'AdminController@adminPareceristaPost');
Route::get('/admin-parecerista-visualizar/{user_id}', 'AdminController@adminPareceristaShowA');
Route::get('/admin-parecerista-visualizar-detalhe/{user_id}', 'AdminController@adminPareceristaShowB');
Route::get('/admin-parecerista-substituir', 'AdminController@adminPareceristaSubstituir');


//----------ADMIN CONFIG INSCRITO-------------
Route::get('/admin-config-inscrito', 'AdminController@adminConfigInscrito');
Route::post('/admin-config-inscrito', 'AdminController@adminConfigInscritoPost');
Route::get('/admin-inscrito', 'AdminController@adminInscrito');
Route::get('/admin-inscrito-visualizar/{id}', 'AdminController@adminInscritoShowA');
Route::get('/admin-inscrito-visualizar-trabalho/{id}', 'AdminController@adminInscritoShowB');
Route::post('/admin-inscrito', 'AdminController@InscritoSearch');


//----------ADMIN CONFIG TRABALHO GET-------------
Route::get('/admin-config-trabalho', 'AdminController@adminConfigTrabalho');
Route::post('/admin-config-trabalho', 'AdminController@adminConfigTrabalhoPost');
Route::get('/admin-trabalho', 'AdminController@adminTrabalho');
Route::get('/admin-trabalho-visualizar/{id}', 'AdminController@adminTrabalhoShowA');
Route::post('/admin-trabalho', 'AdminController@TrabalhoSearch');
Route::post('/admin-trabalho-visualizar/{id}','AdminController@adminTrabalhoDelete');

//----------ADMIN POST-------------
Route::post('/admin', 'AdminController@adminInscritoSubmitPost');
Route::post('/admin-config-eixos/{id}','AdminController@adminConfigEixoDelete');
Route::post('/admin-config-inscrito/{id}','AdminController@adminConfigInscritoDelete');
Route::post('/admin-config-trabalho/{id}','AdminController@adminConfigTrabalhoDelete');






Route::post('/admin-cadastro', 'AdminController@cadastroAdminSubmitPost');
Route::get('/admin-cadastro', 'AdminController@cadastroAdmin');

