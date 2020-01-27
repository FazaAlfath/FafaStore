<?php

Route::get('/', 'HomeController@home');
Route::get('/detail/{id}', 'HomeController@detail');
Route::get('/login-admin', 'AdminController@adminLogin');
Route::post('/order/post', 'HomeController@order');
Route::get('/admin-home', 'AdminController@homeAdmin');
Route::post('/login-verify', 'AdminController@loginverify');
Route::get('/admin-logout', 'AdminController@logout');  
Route::get('/hapus/{id}', 'HomeController@hapus');
Route::get('/edit/{id}', 'HomeController@edit');