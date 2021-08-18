<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// POSTなので、Route::post()
// エンドポイントは、/signup
Route::post('/signup', function (Request $request) {
    // とりあえず、ベタ書きでレスポンスする
    // レスポンスの形をswaggerと合わせる
    return response()->json([
        'id' => 1,
        'nickname' => 'ニックネーム',
        'email' => 'test@example.com',
    ]);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
