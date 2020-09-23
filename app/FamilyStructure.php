<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyStructure extends Model
{
    protected $fillable = [
        'name',
        'kinship_family',
        'birthday',
        'beneficiary_id'
    ];
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
