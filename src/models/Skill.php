<?php

namespace Vilbur\Skills\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	public $table = "skills";

	protected $hidden = ['created_at', 'updated_at'];

	protected $appends = ['category','details'];

	public function categorySkill(){
		return $this->belongsTo('Vilbur\Skills\Models\CategorySkill');
	}
	public function skillDetails(){
		return $this->hasMany('Vilbur\Skills\Models\SkillDetail');
	}


    //public function getSinceAttribute($date)
    //{
    //    return Carbon::createFromFormat('Y-m-d', $date)->diffForHumans();
    //}
    public function getDetailsAttribute($value)
    {
        return $this->skillDetails->toArray();
    }

	/**
	*/
	public function getCategoryAttribute($value)
	{
		//dump( $this->categorySkill->title );
		return $this->categorySkill()->first()->title;
		//return $this->categorySkill->first()->title();
	}

}
