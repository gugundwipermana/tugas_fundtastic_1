<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->title,
        'body' => $faker->paragraph,
        'user_id' => 1
    ];
});
