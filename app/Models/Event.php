<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // use HasFactory;
    public function courseLocation()
    {
       return $this->belongsTo('App\Models\Course','course_id');
    }
}
