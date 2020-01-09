<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName('male').' '.$faker->lastName,
        'student_id' => rand(100,999),
        'mobile' => $faker->randomElement(['017','013','014','015']).rand(11111111,99999999),
        'age' => $faker->randomDigit,
        'status' => $faker->randomElement([0,1])
    ];
});
