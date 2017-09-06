<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Car::class, function (Faker $faker) {

    $fuel = collect([
		'Diesel',
		'Petrol',
        'Electric',
        'Hybrid'
	]);
    
    return [
        'mark' => $faker->word,
        'model' => $faker->word,
        'year' => $faker->year($max = 'now'),
        'maxSpeed' => $faker-> numberBetween($min = 200, $max = 300),
        'isAutomatic' => $faker->boolean($chanceOfGettingTrue = 50),
        'engine' => $fuel->random(1)->first(),
  		'numberOfDoors' => $faker->numberBetween($min = 2, $max = 5)

    ];
});



