<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [
        'status',
        'first_name',
        'second_name',
        'firs_last_name',
        'second_last_name',
        'document_type',
        'document_number',
        'birthday',
        'coutry_of_birth',
        'place_of_birth',
        'gender',
        'kinship_other_familily',
        'civil_status',
        'displaced_population',
        'victim_other_type_violence',
        'wich_violence',
        'registration_date',
        'admission_date',
        'income_weight',
        'income_size',
        'nutritional_state_income',
        'birth_term',
        'number_months_birth',
        'family_type',
    ];
    public function pupulationType()
    {
        return $this->belongsTo('App\TypePopulation', 'id');
    }
    public function ageGroup()
    {
        return $this->belongsTo('App\AgeGroup', 'id');
    }
    public function ethnicity()
    {
        return $this->belongsTo('App\Ethnicity', 'id');
    }
    public function familyStructure()
    {
        return $this->hasMany('App\FamilyStructure', 'beneficiary_id');
    }
    public function socialProgram()
    {
        return $this->hasMany('App\SocialProgram', 'beneficiary_id');
    }
    public function education()
    {
        return $this->hasMany('App\Education', 'beneficiary_id');
    }
    public function socialSecurity()
    {
        return $this->hasMany('App\SocialSecurity', 'beneficiary_id');
    }
    public function mainEconomicSupplier()
    {
        return $this->hasMany('App\MainEconomicSupplier', 'beneficiary_id');
    }
    public function foodSecurity()
    {
        return $this->hasMany('App\FoodSecurity', 'beneficiary_id');
    }
    public function locationConditionHousing()
    {
        return $this->hasMany('App\LocationConditionHousing', 'beneficiary_id');
    }
}
