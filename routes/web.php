<?php

// Homepage
Route::get('/', 'PageController@home');

Route::get('lang/{locale}', 'LocalizationController@index');

// Products
Route::get('/products', 'PageController@products');
Route::get('/products/bec', 'PageController@bec');
Route::get('/products/uht', 'PageController@uht');
Route::get('/products/litz', 'PageController@litz');

// About Us
Route::get('/about', 'PageController@about');

// Contact Us
Route::get('/contact', 'PageController@contact');

// mail route
Route::any('mail/send','MailController@send');