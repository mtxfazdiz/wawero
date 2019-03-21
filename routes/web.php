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



Route::get('/', function () {
    return view('welcome');
});
Route::get('/naszaoferta', function () {
    return view('naszaoferta2');
});
Route::get('/onas', function () {
    return view('onas');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/wspolpraca', function () {
    return view('wspolpraca');
});
Route::get('/jak', function () {
    return view('jak');
});

//Route::get('/', 'NewsletterController@index')->name('index');
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







Route::post('/oferta_send', [
	'uses' => 'NewsletterController@wspolpracaSend', 
	'as' => 'ofertaSend']);




Route::get('/oferta/', [
	'uses' => 'NewsletterController@oferta', 
	'as' => 'newsletter.oferta']);


