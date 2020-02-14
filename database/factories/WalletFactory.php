<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Wallet;
use Faker\Generator as Faker;

$factory->define(Wallet::class, function (Faker $faker) {

    return [
        'holder_type' => $faker->word,
        'holder_id' => $faker->word,
        'name' => $faker->word,
        'slug' => $faker->word,
        'description' => $faker->word,
        'balance' => $faker->word,
        'decimal_places' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
