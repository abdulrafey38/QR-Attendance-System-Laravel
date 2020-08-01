<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class course_related_material extends Model
{
    public $timestamps = false;
    public $table = 'course_related_material';
    protected $primaryKey = 'CRM_ID';
    protected $fillable = ['CRM_Name', 'CRM_type', 'C_ID', 'CRM_des', 'CRM_file', 'created_at'];


    public function course()
    {
        return $this->belongsTo(Course::class, 'C_ID', 'id');
    }

}
