<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public $fillable = [
        'name', 'department_id'
    ];




    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function semesters()
    {
        return $this->hasMany(Semester::class, 'program_id', 'id');
    }
}
