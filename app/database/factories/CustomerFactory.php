<?php

/** @var Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Customer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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


$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName,
        'second_name'=>$faker->middleName,
        'family'=>$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone'=>$faker->phoneNumber
    ];
});
