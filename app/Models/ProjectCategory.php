<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ProjectCategory extends Model
{
    public $table = 'project_categories';

    protected $guarded = ['id'];

    public function projects(){
        return $this->hasMany('App\Models\Project', 'category_id');
    }
}
