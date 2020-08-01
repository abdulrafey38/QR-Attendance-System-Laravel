<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // course semester
    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }

    public function crm()
    {
        return $this->hasMany(course_related_material::class, 'C_ID', 'id');
    }

    public function ca()
    {
        return $this->hasMany(course_related_announcements::class, 'C_ID', 'id');
    }

    // courses
    public function faculty()
    {
        return $this->belongsToMany(Instructor::class, 'section_courses', 'course_id', 'faculty_id');
    }

    // students
    public function students()
    {
        return $this->belongsToMany(User::class, 'student_courses', 'course_id', 'student_id');
    }

    // sections
    public function sections()
    {
        return $this->belongsToMany(Section::class, 'section_courses', 'course_id', 'section_id');
    }

    //section enrolled pivot table values
    public function sectionsEnrolled()
    {
        return $this->hasMany(SectionCourse::class, 'course_id', 'id');
    }
}
