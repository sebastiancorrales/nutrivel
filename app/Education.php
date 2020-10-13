<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'know_read_write',
        'study_currently',
        'educational_level',
        'study_day',
        'course_study_currently',
        'perform_some_course',
        'wich_course',
        'beneficiary_id'
    ];
    public function beneficiary(){
        return $this->belongsTo(Beneficiary::class);
    }
}
