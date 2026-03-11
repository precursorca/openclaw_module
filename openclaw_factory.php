cli<?php

// Database seeder
// Please visit https://github.com/fzaninotto/Faker for more options

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Openclaw_model::class, function (Faker\Generator $faker) {

    return [
        'summary' => $faker->boolean(),
        'platform' => $faker->text($maxNbChars = 200),
        'app' => $faker->text($maxNbChars = 200),
        'cli' => $faker->text($maxNbChars = 200),
        'cli_version' => $faker->text($maxNbChars = 200),
        'state_dir' => $faker->text($maxNbChars = 200),
        'config' => $faker->text($maxNbChars = 200),
        'gateway_service' => $faker->text($maxNbChars = 200),
        'gateway_port' => $faker->text($maxNbChars = 200),
        'docker_container' => $faker->text($maxNbChars = 200),
        'docker_image' => $faker->text($maxNbChars = 200),
    ];
});
