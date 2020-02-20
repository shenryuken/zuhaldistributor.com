<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Purchase;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {

    return [
        'bill_id' => $faker->word,
        'user_id' => $faker->word,
        'product_id' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
