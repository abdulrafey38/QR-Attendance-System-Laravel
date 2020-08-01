<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;


    protected $fillable = [
        'name', 'email', 'password', 'S_gender', 'S_phone', 'S_dob', 'S_Dep', 'S_UID',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    // courses
    public function courses()
    {
        $courses = collect(new Course());
        foreach ($this->sections as $section) {
            $section->course->ca = $section->course->ca;
            $courses->push($section->course);
        }

        return $courses;
    }

    //sections
    public function sections()
    {
        return $this->belongsToMany(SectionCourse::class, 'student_sections', 'student_id', 'section_id');
    }


    public function department()
    {
        return $this->belongsTo(Department::class, 'S_Dep', 'id')->first()->name;
    }

}
