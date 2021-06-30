<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Customer;
use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'customer_id' => function(){
            return factory(Customer::class)->create()->id;
        },
        'date'=>$faker -> date(),
        'totalPrice'=>$faker->randomFloat()
    ];
});
