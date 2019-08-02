<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(Takielias\Posui\Posui::class, function (Faker $faker) {
    return [
        'product_name' => $faker->unique()->name,
        'product_price' => str_shuffle('1234'),
        'product_image' => $faker->imageUrl(400, 300),
        'product_description' => $faker->sentence(6),
        'product_quantity' => $faker->numberBetween(1, 255)
    ];
});
