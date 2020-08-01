<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    public $fillable = [
        'name', 'program_id'
    ];


    public function courses()
    {
        return $this->hasMany(Course::class, 'semester_id', 'id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id', 'id')->first()->name;
    }


}
