<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Posts::class, function (Faker $faker) {
    return [
        'title'         => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description'   => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'image'         => $faker->imageUrl($width = 640, $height = 480),
        'content'       => $faker->text,
        'user_id'       => 1,
        'active'        => true,
        'slug'          => $faker->slug,
        'category_id'   => $faker->numberBetween(1,5)
    ];
});
