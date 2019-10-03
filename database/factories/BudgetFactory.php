<?php

use Faker\Generator as Faker;

$factory->define(App\Budget::class, function (Faker $faker) {
    $types = [
        1 => 'OGk6YqLISq',
        2 => '666kkkiill',
        3 => 'KKILLLOXXXX'
    ];
    return [
        //
        'user_Id' => 2,
        'control_Id' => $faker->numberBetween(1,3),
        'nroOrder' => $faker->numberBetween(500,10000),
        'nroInvoice' => $faker->numberBetween(500,10000),
        'description' => $faker->realText(10),
        'date' => $faker->date,
        'status' => 1,
        'type' => $types[$faker->numberBetween(1,3)],
        'totalAmount' => $faker->numberBetween(200000,2000000),
        'DRSE' => $faker->numberBetween(30000,300000),
        'DEPS' => $faker->numberBetween(30000,300000),
     
        'totalIncome' => $faker->numberBetween(200000,2000000),
     
    ];
});
