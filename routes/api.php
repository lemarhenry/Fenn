<?php

use App\Dan;
use App\Digify;
use App\Http\Resources\json;


Route::get('/dan', function () {
    return new json(Dan::find(1));
});


Route::get('/digify', function () {
    return new json(Digify::find(1));
});

Route::post('/contact', 'Fnhome\ContactController@store');
