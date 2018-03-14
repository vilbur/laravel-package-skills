<?php

/* API */
Route::get('/db/category-skills',	'Vilbur\Skills\Controllers\SkillsController@getAllCategorySkills');
Route::get('/db/skills',	'Vilbur\Skills\Controllers\SkillsController@getAllSkills');