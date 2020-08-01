<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionCourse extends Model
{

    // students
    public function students()
    {
        return $this->belongsToMany(User::class, 'student_sections', 'section_id', 'student_id');
    }


    public function sectionName()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function faculty()
    {
        return $this->belongsTo(Instructor::class, 'faculty_id', 'id');
    }
}
