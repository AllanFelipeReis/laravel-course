<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@view')->name('site.index');

Route::get('/sobre-nos', 'AboutUsController@view')->name('site.about');

Route::get('/contato', 'ContactController@view')->name('site.contact');
Route::post('/contato', 'ContactController@view')->name('site.contact');

Route::get('/login', function() {return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() {return 'Clientes';})->name('app.clients');
    Route::get('/fornecedores', 'ProviderController@index')->name('app.providers');
    Route::get('/produtos', function() {return 'Produtos';})->name('app.products');
});

Route::fallback(function() {
    return "Erro | 404. <a href='".route('site.index')."'>Home</a>";
});

Route::get('/test/{p1}/{p2}', 'TestController@test')->name('site.test');

// Parâmetros Opcionais
// Route::get('/contato/{name}/{subject_id}/{message?}', function(string $name, int $subject_id, string $message = '') {
//     echo "Nome: {$name} <br> Assunto: {$subject_id} <br> Mensagem: {$message}";
// })->where("subject_id", "[0-9]+")->where('name', '[A-Za-z]+');

// Redirecionamentos
// Route::get('/rota1', function() {
//     echo 'Rota 1';
// })->name('site.rota1');

// Route::get('/rota2', function() {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// Método Redirect
// Route::redirect('/rota2', '/rota1');