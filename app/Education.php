<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'know_read_write',
        'educational_level',
        'study_currently',
        'course_study_currently',
        'study_day',
        'perform_some_course',
        'wich_course',
        'beneficiary_id'
    ];
    public function beneficiary(){
        return $this->belongsTo(Beneficiary::class);
    }
}
