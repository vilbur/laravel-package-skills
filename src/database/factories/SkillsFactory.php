<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
*/

$factory->define(\Vilbur\Skills\Models\Skill::class, function (Faker $faker) {
    return [
		'title'	=> $faker->text(24),
		'summary'	=> $faker->sentence(6, true),
		'category_skill_id'	=> $faker->randomElement(\DB::table('category_skills')->select('id')->get()->toArray())->id,
		//////'description'	=> $faker->text(128),
    ];
});
