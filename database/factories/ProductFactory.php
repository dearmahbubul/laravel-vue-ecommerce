<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use App\User;
use Faker\Generator as Faker;
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->paragraph('1'),
        'description' => $faker->paragraph(10),
        'regular_price' => $faker->numberBetween(10,1000),
        'selling_price' => $faker->numberBetween(10,1000),
        'stock'=> $faker->numberBetween(10,100),
        'discount' => $faker->numberBetween(2,30),
        'status' => $faker->numberBetween(0,1),
        'category_id' => function(){
            return Category::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        }
    ];
});