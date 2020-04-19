<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' =>'Category 1',
        
    ];
});


$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'color'=>$faker->name,
        'size'=>'xl',
        'category_id'=>1,
        'description'=>$faker->paragraph(2),
        'price'=>rand(100,1599),
        'quantity'=>rand(1,5),
        'image'=>"/image/product/product5.jpg",
        'color'=>$faker->name,
           
    ];
});