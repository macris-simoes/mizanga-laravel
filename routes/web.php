<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});

Route::get('/inscricao-usuario', function () {
    return view('inscricao-usuario');
});

Route::get('/contato', function () {
    return view('contato');
});

//-----------LINKS------------
Route::get('/criterios-trabalho', function () {
    return view('link-criterios-trabalho');
});
Route::get('/instrucao-avaliadores', function () {
    return view('link-instrucao-avaliadores');
});
Route::get('/instrucoes-inscricao', function () {
    return view('instrucoes-inscricao');
});


//----------LOGIN--------------
Route::get('/login', function () {
    return view('login');
});
        

//------------INSCRITOS------------
Route::get('/inscrito', function () {
    return view('inscrito-tabs');
});


//----------ADMIN-------------
Route::get('/admin', function () {
    return view('admin-tabs');
});

//DIABÉISS TIPSY//
// Route::get('/gerenciar', function () {
//     return view('admin-gerenciar-parecerista');
// });


//--------Parecerista----------
Route::get('/parecerista', function () {
    return view('parecerista-tabs');
});

// Route::resource ('crud','CrudController');


