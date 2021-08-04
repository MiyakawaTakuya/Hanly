<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    //
    // 実際のテーブルが、クラス名の複数形＋スネークケースであれば、書かなくてOK
    protected $table = 'pins';
    // Eloquentを通して更新や登録が可能なフィールド（ホワイトリストを定義）
    protected $fillable = [
        'friend_id', 'latitude', 'longitude',
    ];
}
