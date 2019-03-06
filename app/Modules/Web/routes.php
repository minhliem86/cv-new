<?php

Route::group(['namespace'=>'App\Modules\Web\Controllers', 'middleware' => 'web'], function (){
   Route::get('/','HomeController@index')->name('web.home');

   Route::post('/register', 'RegisterController@register')->name('web.register');
});