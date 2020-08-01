<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title', 'file_path', 'faculty_id'
    ];

    public function faculty()
    {
        return $this->belongsTo(Instructor::class, 'faculty_id', 'id');
    }
}
