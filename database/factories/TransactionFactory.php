<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {

    return [
        'payable_type' => $faker->word,
        'payable_id' => $faker->word,
        'wallet_id' => $faker->randomDigitNotNull,
        'type' => $faker->word,
        'amount' => $faker->word,
        'confirmed' => $faker->word,
        'meta' => $faker->text,
        'uuid' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
