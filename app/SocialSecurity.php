<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialSecurity extends Model
{
    protected $fillable = [
        'eps_name',
        'afiliation_type',
        'has_sisben',
        'score_sisben',
        'social_security_scheme_id',
        'funcional_diversity_id',
        'beneficiary_id'
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
