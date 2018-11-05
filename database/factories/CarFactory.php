<?php
use Faker\Generator as Faker;
$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        //'make' => $faker->firstName(),
        'make' => $faker->randomElement(['firstName[]'=>'ford', 'honda', 'toyota']),
        'model' => $faker->company(),
        'year' => $faker->year(),
    ];
    //$faker = factory(App\User::class)->model(['name[]'=>'ford', 'honda', 'toyota']);
});