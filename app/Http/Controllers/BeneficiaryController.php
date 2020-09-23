<?php

namespace App\Http\Controllers;

use App\Beneficiary;
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
            'pupulationType',
            'ageGroup',
            'ethnicity',
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
    public function store(Request $request)
    {
        // $beneficiary          = new Beneficiary();
        // $beneficiary->name    = $request->get('first_name');
        // $beneficiary->save();

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
            'pupulationType',
            'ageGroup',
            'ethnicity',
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
        //
    }
}
