<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usermodel;
use Faker\Generator as Faker;

$factory->define(App\Usermodel::class, function (Faker $faker) {
    return [
        //
        'name' => $faker -> name,
        'address' => $faker -> address,
        'phone' => $faker -> phone,
        'state' => $faker -> state,
        'country' => $faker -> country,
    ];
});
