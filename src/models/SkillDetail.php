<?php

namespace Vilbur\Skills\Models;

use Illuminate\Database\Eloquent\Model;

class SkillDetail extends Model
{
	public $table = "skill_details";

	protected $hidden = ['id', 'created_at', 'updated_at'];

	public function skill(){
		return $this->belongsTo('Vilbur\Skills\Models\Skill');
	}
}
