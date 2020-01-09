<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Myinfo;
use Faker\Generator as Faker;

$factory->define(Myinfo::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName.''.$faker->lastName,
        'roll'=>rand(1,100),
        'status'=>$faker->randomElements(0,1)

    ];
});
