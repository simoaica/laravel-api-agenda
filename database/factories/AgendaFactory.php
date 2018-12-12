<?php

use Faker\Generator as Faker;

$factory->define(App\Agenda::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,5),
        'name' => $faker->name,
        'tel' => $faker->phoneNumber,
        'adress' => $faker->streetAddress,
        'email' => $faker->unique()->email,
        'website' => $faker->domainName
    ];
});
