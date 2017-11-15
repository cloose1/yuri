<?php

//Area do Usuario
Route::get('/', 'LoginUsuarioController@login')->name('login');
Route::post('/logar', 'LoginUsuarioController@logar')->name('logar');
Route::get('/cadastrar','LoginUsuarioController@cadastrar')->name('cadastrar');
Route::post('/register','LoginUsuarioController@register')->name('register');

//Formulario do Usuario
Route::prefix('user')->group(function(){
  Route::prefix('update')->group(function(){
    Route::put('/essencial','LoginUsuarioController@userUpdateEssencial')->name('user.update.essencial')->middleware('auth');
    Route::put('/financeiro','LoginUsuarioController@userUpdateFinanceiro')->name('user.update.financeiro')->middleware('auth');
    Route::put('/redessociais','LoginUsuarioController@userUpdateRedesSociais')->name('user.update.redessociais')->middleware('auth');
    Route::put('/pessoais','LoginUsuarioController@userUpdatePessoais')->name('user.update.pessoais')->middleware('auth');
    Route::put('/trabalho','LoginUsuarioController@userUpdateTrabalho')->name('user.update.trabalho')->middleware('auth');
    Route::put('/avatar','LoginUsuarioController@userUpdateAvatar')->name('user.update.avatar')->middleware('auth');
  });

  Route::get('/logout','LoginUsuarioController@userLogout')->name('user.logout')->middleware('auth');

});

//Paginas do Usuario
Route::get('/user/home','LoginUsuarioController@userHome')->name('user.home')->middleware('auth');
Route::get('/user/compras','LoginUsuarioController@userCompras')->name('user.compras')->middleware('auth');
Route::get('/user/redes','LoginUsuarioController@userRedes')->name('user.redes')->middleware('auth');
