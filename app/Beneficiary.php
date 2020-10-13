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
        'civil_st atus',
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
    
        'population_type_id',
        'age_group_id',
        'ethnic_id'
    ];
    public function populationType()
    {
        return $this->belongsTo('App\TypePopulation');
    }
    public function ageGroup()
    {
        return $this->belongsTo('App\AgeGroup');
    }
    public function ethnic()
    {
        return $this->belongsTo('App\Ethnicity');
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
