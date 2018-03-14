<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
*/

$factory->define(\Vilbur\Skills\Models\SkillDetail::class, function (Faker $faker) {
    return [
		'title'	=> $faker->text(24),
		'summary'	=> $faker->sentence(6, true),
		'description'	=> $faker->text(128),
		'skill_id'	=> $faker->randomElement(\DB::table('skills')->select('id')->get()->toArray())->id,
    ];
});
