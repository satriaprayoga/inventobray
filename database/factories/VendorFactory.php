<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Inventory\Vendor;
use Faker\Generator as Faker;

$factory->define(Vendor::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'address'=>$faker->address,
        'phone'=>$faker->phoneNumber,
        'email'=>$faker->email,
        'contact_person'=>$faker->name
    ];
});
