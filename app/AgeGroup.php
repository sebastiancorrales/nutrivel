<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgeGroup extends Model
{
    protected $fillable = [
        'name',
    ];
    public function beneficiary() {
        return $this->belongsToMany(Beneficiary::class);
    }
}
