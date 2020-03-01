<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return array(
        'user_id' => $faker->uuid,
        'caption' => $faker->city,
        //'image' => '/uploads/nEjIitvQqjMOWqIUMpImXG8bACVS419tkhdCIzLF.jpeg',
        'image' => '/uploads/sampleImage' . rand(1,60)  . '.jpg',
    );
});
