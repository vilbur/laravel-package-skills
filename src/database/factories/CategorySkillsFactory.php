<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
*/

$factory->define(\Vilbur\Skills\Models\CategorySkill::class, function (Faker $faker) {
    return [
		'title'	=> $faker->text(24),
    ];
});
