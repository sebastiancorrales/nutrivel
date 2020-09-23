<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainEconomicSupplier extends Model
{
    protected $fillable = [
        'name',
        'occupation',
        'workplace',
        'income',
        'expenses',
        'beneficiary_id'
    ];
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
