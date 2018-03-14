<?php

namespace Vilbur\Skills\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class CategorySkill extends Model
{
	use Sluggable;

	public $table = "category_skills";

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [ 'slug' => [ 'source' => 'title' ] ];
    }

	public function skills(){
		return $this->hasMany('Vilbur\Skills\Models\Skill');
	}


}
