<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Eloquents\FriendsRelationship;
use Faker\Generator as Faker;

$factory->define(FriendsRelationship::class, function (Faker $faker) {
    return [
        'own_friends_id' => factory(\APP\Eloquent\Friend::class)->create()->id,
        'other_friends_id' => factory(\APP\Eloquent\Friend::class)->create()->id,
    ];
});
