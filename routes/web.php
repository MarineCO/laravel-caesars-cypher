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

Route::get('/messages', 'MessageController@getMessage');

Route::get('/messages/add', 'MessageController@getNewEncryptMessage');

Route::post('/messages/addMessage', 'MessageController@postNewEncryptMessage');

Route::delete('/messages/delete/{id}', 'MessageController@deleteMessage');

Route::get('/messages/decipher/{id}', 'MessageController@getEncryptMessage');

Route::put('/message/decipherMessage', 'MessageController@postDecipherMessage');