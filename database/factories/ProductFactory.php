<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'productName' =>  $faker -> text(30),
        'productModel' =>  $faker -> text(10),
        'productBrand_id' =>  $faker -> randomNumber(),
        'prodcolor' =>  $faker -> hexColor(30),
        'productCountry' =>  $faker -> country(30),
        'prodSpecification' =>  $faker -> paragraph(30),
        'prodManufacturer' =>  $faker ->paragraph(30),
        'image_1' =>  $faker -> image(),
        'image_2' =>  $faker -> image(),
        'image_3' =>  $faker -> image(),
        'image_4' =>  $faker -> image(),
        'category_id' =>  $faker -> randomNumber(),
        'supplier_id' =>  $faker -> randomNumber(),
    ];
});
