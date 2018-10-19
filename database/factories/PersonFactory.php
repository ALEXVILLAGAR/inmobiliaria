<?php

use Faker\Generator as Faker;

use App\Person;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'identification' => random_int(1000000, 9999999999)
    ];
});
