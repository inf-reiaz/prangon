<?php

/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
*/

Route::group(['prefix'=>'auth'], function(){
   
    Route::get('/signup', ['as'=>'signup', 'uses'=>  'AccessController@signup']);
    
    Route::post('/signup','AccessController@postSignup');
    
    Route::get('/sigin', ['as'=>'signin', 'uses'=>  'AccessController@signin']);
    
    Route::get('/forgot-password', ['as'=>'forgot-password', 'uses'=>  'AccessController@forgot_password']);
    
});
