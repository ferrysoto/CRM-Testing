<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'address', 'school_id', 'born_date', 'born_city'];
}
