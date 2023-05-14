<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SiteContact;
use Faker\Generator as Faker;

$factory->define(SiteContact::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'subject_id' => random_int(1, 3),
        'mensagem' => $faker->text(100)
    ];
});
