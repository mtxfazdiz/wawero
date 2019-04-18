<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (App::environment('production')) {
    URL::forceScheme('https');
}

//top menu
Route::get('/', function () {
    return view('welcome');
});
Route::get('/produkt', function () {
    return view('produkt');
});
Route::get('/naszaoferta', function () {
    return view('naszaoferta2');
});
Route::get('/onas', function () {
    return view('onas');
});
Route::get('/kontakt', function () {
    return view('kontakt2');
});
Route::get('/wspolpraca', function () {
    return view('wspolpraca');
});
Route::get('/jak', function () {
    return view('jak');
});



//newsletter controller
Route::post('/newsletter_send', [
	'uses' => 'NewsletterController@newsletterSend', 
	'as' => 'send']);

Route::get('/newsletter_delete/{code}', [
	'uses' => 'NewsletterController@newsletterDelete', 
	'as' => 'delete']);

Route::get('/newsletter/deleted/', [
	'uses' => 'NewsletterController@deleted', 
	'as' => 'newsletter.deleted']);

Route::get('/newsletter/', [
	'uses' => 'NewsletterController@index', 
	'as' => 'newsletter.index']);






//oferta
Route::post('/oferta_send', [
	'uses' => 'NewsletterController@wspolpracaSend', 
	'as' => 'ofertaSend']);

Route::get('/oferta/', [
	'uses' => 'NewsletterController@oferta', 
	'as' => 'newsletter.oferta']);





//miody
Route::get('/naszaoferta/lipowy', function () {
    return view('miody.lipowy');
});

Route::get('/naszaoferta/wielokwiatowy', function () {
    return view('miody.wielokwiatowy');
});

Route::get('/naszaoferta/rzepakowy', function () {
    return view('miody.rzepakowy');
});

Route::get('/naszaoferta/gryczany', function () {
    return view('miody.gryczany');
});

Route::get('/naszaoferta/zpylkiem', function () {
    return view('miody.zpylkiem');
});

Route::get('/naszaoferta/zpropolisem', function () {
    return view('miody.zpropolisem');
});

Route::get('/naszaoferta/nektar', function () {
    return view('miody.nektar');
});

Route::get('/naszaoferta/pylek', function () {
    return view('miody.pylek');
});