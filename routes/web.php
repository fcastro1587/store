<?php


Route::get('/',           'web\HomeController@index')->name('home.index');

Route::get('jeans',       'web\HomeController@jeans')->name('jeans.jeans');
Route::get('promociones', 'web\HomeController@promociones')->name('promociones.promociones');
Route::get('contactanos', 'web\HomeController@contactanos')->name('contactanos.contactanos');


Route::resource('storage', 'StorageController');
