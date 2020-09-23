<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationConditionHousing extends Model
{
    protected $fillable = [
        'zone',
        'neighborhood',
        'address',
        'commune',
        'telephone',
        'cellphone',
        'cellphone2',
        'socioeconomic_stratum',
        'housing_type',
        'housing_holding',
        'housing_material',
        'material_soil',
        'service_water',
        'service_light',
        'service_sewerage',
        'service_natural_gas',
        'service_telephony',
        'service_tv',
        'service_internet',
        'service_sanitary',
        'quantity_rooms',
        'number_rooms_where_sleep',
        'beneficiary_id'
    ];
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
