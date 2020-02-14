<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transfer;
use Faker\Generator as Faker;

$factory->define(Transfer::class, function (Faker $faker) {

    return [
        'from_type' => $faker->word,
        'from_id' => $faker->word,
        'to_type' => $faker->word,
        'to_id' => $faker->word,
        'status' => $faker->word,
        'status_last' => $faker->word,
        'deposit_id' => $faker->randomDigitNotNull,
        'withdraw_id' => $faker->randomDigitNotNull,
        'discount' => $faker->word,
        'fee' => $faker->word,
        'uuid' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
