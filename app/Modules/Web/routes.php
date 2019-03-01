<?php

Route::group(['namespace'=>'App\Modules\Web\Controllers'], function (){
   Route::get('/','HomeController@index')->name('web.home');
});