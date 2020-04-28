<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/home', 'HomeController@index');
Route::get('/inscricao-usuario', 'InscricaoController@inscricaoIndex');
Route::post('/inscricao-usuario', 'InscricaoController@inscricaoSubmitPost');
Route::get('/admin-cadastro', 'AdminController@cadastro');
Route::post('/admin-cadastro', 'AdminController@cadastroPost');


//-----------CONTATO------------
Route::get('/contato', 'ContatoController@contatoIndex');

//-----------INFO-LINKS------------
Route::get('/criterios-trabalho', 'LinksController@criteriosTrabalho');
Route::get('/instrucao-avaliadores', 'LinksController@instrucaoAvaliadores');
Route::get('/instrucoes-inscricao', 'InscricaoController@inscricaoInstrucao');

//----------LOGIN--------------
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {

    //------------INSCRITO------------
    Route::prefix('inscrito')->group((function () {
        Route::get('/', 'InscritoController@home')->name('inscrito.home');
        Route::get('/certificados', 'InscritoController@certificados')->name('inscrito.certificados');
            Route::prefix('trabalho')->group(function () {
                Route::get('/enviar', 'InscritoController@enviar')->name('trabalho.enviar');
                Route::post('/enviar', 'InscritoController@enviarPost')->name('trabalho.enviarpost');
                Route::get('/cadastrados', 'InscritoController@enviados')->name('trabalho.enviados');
            });
    }));


    //--------PARECERISTA----------
    Route::prefix('parecerista')->group(function () {
        Route::get('/', 'PareceristaController@home')->name('parecerista.home');
            Route::prefix('trabalho')->group(function () {
                Route::get('/avaliar/{submission_id}', 'PareceristaController@avaliar')->name('parecerista.avaliar');
                Route::post('/avaliar/{submission_id}', 'PareceristaController@avaliarPost')->name('parecerista.avaliarpost');
            });
    });

    //--------ADMINISTRADOR----------
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminController@home');

        //--------CONGRESSO CONFIG----------
        Route::prefix('config')->group(function(){
            Route::get('/congresso', 'AdminController@configCongresso');
            Route::post('/congresso', 'AdminController@configCongressoPost');
            Route::get('/eixos', 'AdminController@configEixo');
            Route::post('/eixos', 'AdminController@configEixoPost');
            Route::post('/eixos/{id}','AdminController@eixoDelete');
            Route::get('/inscrito', 'AdminController@configInscrito');
            Route::post('/inscrito', 'AdminController@configInscritoPost');
            Route::post('/inscrito/{id}','AdminController@inscritoDelete');
            Route::get('/trabalho', 'AdminController@configModalidadeTrabalho');
            Route::post('/trabalho', 'AdminController@configModalidadeTrabalhoPostt');
            Route::post('/trabalho/{id}','AdminController@modalidadeTrabalhoDelete');
            Route::get('/parecerista', 'AdminController@configParecerista');
            Route::post('/parecerista', 'AdminController@configPareceristaPost');

        });

        //--------ADMIN-INSCRITO----------
        Route::prefix('inscrito')->group(function() {
            Route::get('/', 'AdminController@listarInscrito');
            Route::post('/', 'AdminController@InscritoSearch');
            Route::get('/visualizar/{id}', 'AdminController@listarInscritoInfo');
            Route::get('/visualizar-trabalho/{id}', 'AdminController@listarInscritoTrabalho');
        });


        //--------ADMIN-TRABALHOS----------
        Route::prefix('trabalho')->group(function(){
            Route::get('/', 'AdminController@listarTrabalho');
            Route::post('/', 'AdminController@trabalhoSearch');
            Route::get('/visualizar/{id}', 'AdminController@visualizarTrabalho');
            Route::post('/visualizar/{id}','AdminController@trabalhoDelete');
        });


        //--------ADMIN-PARECERISTA----------
        Route::prefix('parecerista')->group(function(){
            Route::get('/', 'AdminController@listarParecerista');
            Route::post('/', 'AdminController@adminPareceristaPost'); //SEARCH?
            Route::get('/visualizar/{user_id}', 'AdminController@pareceristaTrabalhosPendentes');
            Route::get('/visualizar-detalhe/{user_id}', 'AdminController@pareceristaTrabalhosAvaliados');
            Route::get('/substituir', 'AdminController@pareceristaSubstituir');
        });

    
    });

});







