<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {

    $img_array = [ 1 => 'case.jpg', 2 => 'glass.jpg', 3 => 'film.jpg', 4 => 'cable.jpg' , 5 => 'headphones.jpg'];
    $img_array_key_random = array_rand($img_array);
    $img_random = $img_array[$img_array_key_random];

    return [
        'title' => $faker->realText(mt_rand(20,255)),
        'img_url' => $img_random,
        'price' => $faker->numberBetween(50, 500),
        'type_id' => $img_array_key_random
    ];
});
