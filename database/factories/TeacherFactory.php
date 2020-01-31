<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName.''.$faker->lastName,
        'teacher_id'=>rand(1,10),
        'age' => $faker->randomDigit,
        'status' => $faker->randomElement([0,1])
    ];
});
//'mobile' => $faker->randomElement(['017','013','014','015']).rand(11111111,99999999),
