<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\Http\Requests\BeneficiaryRequest;
use Exception;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Beneficiary::with(
            'populationType',
            'ageGroup',
            'ethnic',
            'familyStructure',
            'socialProgram',
            'education',
            'socialSecurity',
            'mainEconomicSupplier',
            'foodSecurity',
            'locationConditionHousing'
        )->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeneficiaryRequest $request)
    {
        $beneficiary                                    = new Beneficiary();
        $beneficiary->status                            = "true";
        $beneficiary->first_name                        = $request->get('first_name');
        $beneficiary->second_name                       = $request->get('second_name');
        $beneficiary->first_last_name                   = $request->get('first_last_name');
        $beneficiary->second_last_name                  = $request->get('second_last_name');
        $beneficiary->document_type                     = $request->get('document_type');
        $beneficiary->document_number                   = $request->get('document_number');
        $beneficiary->country_of_birth                  = $request->get('country_of_birth');
        $beneficiary->place_of_birth                    = $request->get('place_of_birth');
        $beneficiary->birthday                          = $request->get('birthday');
        $beneficiary->birth_term                        = $request->get('birth_term');
        $beneficiary->gender                            = $request->get('gender');
        $beneficiary->kinship_other_family              = "No";
        $beneficiary->civil_status                      = $request->get('civil_status');
        $beneficiary->displaced_population              = $request->get('displaced_population');
        $beneficiary->victim_other_type_violence        = "No";
        $beneficiary->registration_date                 = $request->get('registration_date');
        $beneficiary->income_weight                     = $request->get('income_weight');
        $beneficiary->income_size                       = $request->get('income_size');
        $beneficiary->nutritional_state_income          = $request->get('nutritional_state_income');
        $beneficiary->number_months_birth               = $request->get('number_months_birth');
        $beneficiary->family_type                       = $request->get('family_type');
        $beneficiary->authorize_handling_information    = "SI";
        $beneficiary->registration_date                 ="2020/10/2";
        $beneficiary->save();

        $data = [
            'success'   => true,
            'status'    => 200,
            'message'   => 'Your store processed correctly'
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficiary $beneficiary)
    {
        return $beneficiary::with(
            'populationType',
            'ageGroup',
            'ethnic',
            'familyStructure',
            'socialProgram',
            'education',
            'socialSecurity',
            'mainEconomicSupplier',
            'foodSecurity',
            'locationConditionHousing'
        )->find($beneficiary->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function edit(Beneficiary $beneficiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficiary $beneficiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficiary $beneficiary)
    {
        try
        {
            if($beneficiary->delete()){
                $data = [
                    'success'   => true,
                    'status'    => 200,
                    'message'   => 'Your destroy processed correctly'
                ];
        
                return response()->json($data);
            }
        }
        catch(Exception $e) {
            if($e->getCode()==23000) {
                return 'Error 23000';
            }
        }
    }
}
