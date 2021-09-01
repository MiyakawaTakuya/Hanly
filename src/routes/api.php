<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// POSTなので、Route::post()
// エンドポイントは、/signup
// Route::post('/signup', function (Request $request) {
//     // とりあえず、ベタ書きでレスポンスする
//     // レスポンスの形をswaggerと合わせる
//     return response()->json([
//         'id' => 1,
//         'nickname' => '写経しながらちゃんとあんた理解してんの？',
//         'email' => 'test@example.com',
//     ]);
// });

Route::post('/signup', 'Api\SignupController@signup')->name('api.signup.post');

Route::middleware('auth:api')->group(
    function () {
        Route::get('/me', 'Api\MeController@me')->name('api.me.get');

        Route::post('/my/image', 'Api\ImageController@store')->name('api.my.image.post');

        Route::post('/my/pin', 'Api\PinController@store')->name('api.my.pin.post');

        Route::get('/friends/{friendId}', 'Api\FriendController@show')->name('api.friends.get');

        Route::get('/friends', 'Api\FriendController@list')->name('api.friends.list.get');
    }
);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ここはログインしてない（TOKENがない）でもアクセスできる
Route::post('/hoge', function () {
    return 'hoge';
});

// ミドルウェアで認証をかけてログインしてないとアクセスできないAPIを定義できる
Route::middleware('auth:api')->group(function () {
    // 一つ一つにミドルウェアは設定できるけど、こんな風にgroupで括るとわかりやすい
    Route::get('/fuga', function () {
        return 'fuga';
    });

    Route::put('/piyo', function () {
        return 'piyo';
    });
});
