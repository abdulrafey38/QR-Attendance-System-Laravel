<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Instructor extends Authenticatable
{
    use Notifiable;
    protected $table = 'instructors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'I_gender', 'I_phone', 'I_dob', 'I_Dep', 'I_SID',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function sections()
    {
        return $this->hasMany(SectionCourse::class, 'faculty_id','id');
    }

    // courses
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'section_courses', 'faculty_id', 'course_id');
    }

    // department
    public function department()
    {
        return $this->belongsTo(Department::class, 'I_Dep', 'id')->first()->name;
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'faculty_id', 'id');
    }
}
