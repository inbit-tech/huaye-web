<?php

// Homepage
Route::get('/', 'PageController@home');

Route::get('lang/{locale}', 'LocalizationController@index');

// Products
Route::get('/products', 'PageController@products');
Route::get('/bec', 'PageController@bec');
Route::get('/uht', 'PageController@uht');
Route::get('/litz', 'PageController@litz');

// About Us
Route::get('/about', 'PageController@about');

// Contact Us
Route::get('/contact', 'PageController@contact');

// mail route
Route::any('mail/send','MailController@send');