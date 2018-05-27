<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Banners::class, function (Faker $faker) {
    return [
        'titulo'       => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content'      => '<a rel="nofollow" href="'. $faker->url .'" target="_blank" title="Namecheap.com"><img src="'. $faker->imageUrl($width = 640, $height = 480) .'" alt=""></a>',
    ];
});