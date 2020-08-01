<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class course_related_announcements extends Model
{
    public $timestamps = false;
    public $table ='course_related_announcements';
    protected $primaryKey = 'CA_ID';
    protected $fillable = ['CA_Name', 'CA_type','C_ID','CA_des','CA_file','created_at'];


    public function course()
    {
        return $this->belongsTo(Course::class, 'C_ID', 'id');
    }


}
