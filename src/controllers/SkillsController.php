<?php namespace Vilbur\Skills\Controllers;

use App\Http\Controllers\Controller;
use Vilbur\Skills\Models\CategorySkill;
use Vilbur\Skills\Models\Skill;

class SkillsController extends Controller {

    public function testView() {
		return \View::make('Skills::view');
   }

	/**
	*/
	public function getAllSkills()
	{
		return Skill::all()->toArray();

	}
	/**
	*/
	public function getAllCategorySkills()
	{
		return CategorySkill::all()->toArray();

	}
}