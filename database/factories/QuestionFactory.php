<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Question::class, function (Faker $faker) {

    $title = rtrim($faker->sentence(rand(5, 10)), ".");
    $slug  = Str::slug($title);

    return [
         'title'          => $title
        ,'slug'           => $slug
        ,'body'           => $faker->paragraphs(rand(3, 7),true)
        ,'views'          => rand(0, 10)
        // ,'answers_count'  => rand(0, 10)
        // ,'votes_count'    => rand(-3, 10)
    ];
});
