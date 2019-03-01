<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    public $table = 'profiles';

    protected $guarded = ['id'];
}
