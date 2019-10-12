<?php

use Faker\Generator as Faker;

$factory->define(App\Expense::class, function (Faker $faker) {
    return [ 
        'user_Id' => 2,
        'budget_id' => $faker->numberBetween(1,40),
        'control_id' => $faker->numberBetween(1,3),
        'description' => $faker->realText(20),
        'amount' => $faker->numberBetween(2000,200000)     
    ];
});
