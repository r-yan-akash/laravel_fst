<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Myinfo;
use App\Models\Department;
use Faker\Generator as Faker;

$factory->define(Myinfo::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName.''.$faker->lastName,
        'roll'=>rand(1,100),
        'department_id'=>Department::all()->random(),
        'status'=>$faker->randomElement([0,1])

    ];
});
