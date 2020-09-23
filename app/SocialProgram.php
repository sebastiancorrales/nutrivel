<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProgram extends Model
{
    protected $fillable = [
        'enrolled_another_social_program',
        'what_program',
        'some_subsidy_type',
        'what_subsidy_type',
        'income_received',
        'beneficiary_id'
    ];
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
