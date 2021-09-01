<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'success'; // ヘルスチェック用
});

Route::get('/friend/image/{userId}', 'Web\ImageController@show')->name('web.image.get');

Route::get('/', function () {
    return view('welcome');
});
