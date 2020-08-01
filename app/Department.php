<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];


    public function programs()
    {
        return $this->hasMany(Program::class, 'department_id', 'id');
    }

    public function faculty()
    {
        return $this->hasMany(Instructor::class, 'I_Dep', 'id');
    }
}
