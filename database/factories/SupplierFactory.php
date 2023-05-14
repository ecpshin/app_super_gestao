<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'nome' => $faker->company,
        'site' => $faker->domainName,
        'email' => $faker->companyEmail,
        'uf' => $faker->state
    ];
});
