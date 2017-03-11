<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Hero::class, function(Faker\Generator $faker){
	return[
		'name' => $faker->name,
		'nickname' => $faker->name,
		'health' => $faker->numberBetween(500,800),
		'mana' => $faker->numberBetween(200,400),
		'damage' => $faker->numberBetween(40,75),
		'armour' => $faker->numberBetween(0,7)
	];
});

$factory->define(App\Hero_Photo::class, function(Faker\Generator $faker){
	return [
		'name' => $faker->name,
		'path' => $faker->name, //budallaki veq hajt
		'hero_id' => $faker->randomDigit
	];
});
