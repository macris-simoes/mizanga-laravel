<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', 'HomeController@index');
Route::get('/inscricao-usuario', 'InscricaoController@inscricaoIndex');
Route::post('/inscricao-usuario', 'InscricaoController@inscricaoSubmitPost');
Route::get('/instrucoes-inscricao', 'InscricaoController@inscricaoInstrucao');

//-----------CONTATO------------
Route::get('/contato', 'ContatoController@contatoIndex');
//envio de form// Route::post('/contato', 'ContatoController@contatoSubmitPost');

//-----------LINKS------------
Route::get('/criterios-trabalho', 'LinksController@criteriosTrabalho');
Route::get('/instrucao-avaliadores', 'LinksController@instrucaoAvaliadores');

//----------LOGIN--------------
Route::get('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::post('/login', 'LoginController@authenticate');

//------------INSCRITO------------
Route::middleware([])->group(function () {

    //Route::prefix('inscrito/{inscrito?}')
    Route::prefix('inscrito/{inscrito?}')->group((function () {
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
//Route::prefix('parecerista/{parecerista?}')
route::prefix('parecerista')->group(function () {
    Route::get('/', 'PareceristaController@home')->name('parecerista.home');
    Route::prefix('trabalho')->group(function () {
        Route::get('/avaliar', 'PareceristaController@avaliar')->name('parecerista.avaliar');
        Route::post('/avaliar', 'PareceristaController@avaliarPost')->name('parecerista.avaliarpost');
    });
});



//----------ADMIN GET-------------
Route::get('/admin', 'AdminController@adminHome');
Route::get('/admin-config-congresso', 'AdminController@adminCongresso');
Route::post('/admin-config-congresso', 'AdminController@adminCongressoPost');
Route::get('/admin-config-eixos', 'AdminController@adminEixo');
Route::post('/admin-config-eixos', 'AdminController@adminEixoSubmitPost');

//----------ADMIN PARECERISTA GET-------------
Route::get('/admin-config-parecerista', 'AdminController@adminConfigParecerista');
Route::post('/admin-config-parecerista', 'AdminController@configPareceristaSubmitPost');
Route::get('/admin-parecerista', 'AdminController@adminParecerista');
Route::get('/admin-parecerista-showa', 'AdminController@adminPareceristaShowA');
Route::get('/admin-parecerista-showb', 'AdminController@adminPareceristaShowB');

Route::get('/admin-parecerista-substituir', 'AdminController@adminPareceristaSubstituir');


//----------ADMIN INSCRITO GET-------------
Route::get('/admin-config-inscrito', 'AdminController@adminConfigInscrito');
Route::post('/admin-config-inscrito', 'AdminController@adminConfigInscritoPost');
Route::get('/admin-inscrito', 'AdminController@adminInscrito');
Route::get('/admin-inscrito-showa/{id}', 'AdminController@adminInscritoShowA');
Route::get('/admin-inscrito-showb/{id}', 'AdminController@adminInscritoShowB');

//----------ADMIN TRABALHO GET-------------
Route::get('/admin-config-trabalho', 'AdminController@adminConfigTrabalho');
Route::post('/admin-config-trabalho', 'AdminController@adminConfigTrabalhoPost');
Route::get('/admin-trabalho', 'AdminController@adminTrabalho');
Route::get('/admin-trabalho-showa', 'AdminController@adminTrabalhoShowA');

//----------ADMIN POST-------------
Route::post('/admin', 'AdminController@adminInscritoSubmitPost');






Route::post('/admin-cadastro', 'AdminController@cadastroAdminSubmitPost');
Route::get('/admin-cadastro', 'AdminController@cadastroAdmin');

Route::resource('crud', 'CrudController');
