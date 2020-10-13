<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\Http\Requests\LocationConditionHousingRequest;
use App\LocationConditionHousing;
use Illuminate\Http\Request;

class LocationConditionHousingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LocationConditionHousing::all();
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
    public function store(LocationConditionHousingRequest $request)
    {
        $document = $request->get('document_number');
        $bene = Beneficiary::where('document_number', '=', $document)->get();
        $id = $bene[0]->id;

        $locationConditionHousing                               = new LocationConditionHousing();
        $locationConditionHousing->state                         = $request->get('state');
        $locationConditionHousing->departament                         = $request->get('departament');
        $locationConditionHousing->zone                         = $request->get('zone');
        $locationConditionHousing->neighborhood                 = $request->get('neighborhood');
        $locationConditionHousing->address                      = $request->get('address');
        $locationConditionHousing->commune                      = $request->get('commune');
        $locationConditionHousing->telephone                    = $request->get('telephone');
        $locationConditionHousing->cellphone                    = $request->get('cellphone');
        $locationConditionHousing->cellphone_2                   = $request->get('cellphone_2');
        $locationConditionHousing->socioeconomic_stratum        = $request->get('socioeconomic_stratum');
        $locationConditionHousing->housing_type                 = $request->get('housing_type');
        $locationConditionHousing->housing_holding              = $request->get('housing_holding');
        $locationConditionHousing->housing_material             = $request->get('housing_material');
        $locationConditionHousing->material_soil                = $request->get('material_soil');
        $locationConditionHousing->service_water                = $request->get('service_water');
        $locationConditionHousing->service_light                = $request->get('service_light');
        $locationConditionHousing->service_sewerage             = $request->get('service_sewerage');
        $locationConditionHousing->service_natural_gas          = $request->get('service_natural_gas');
        $locationConditionHousing->service_telephony            = $request->get('service_telephony');
        $locationConditionHousing->service_tv                   = $request->get('service_tv');
        $locationConditionHousing->service_internet             = $request->get('service_internet');
        $locationConditionHousing->service_sanitary             = $request->get('service_sanitary');
        $locationConditionHousing->quantity_rooms               = $request->get('quantity_rooms');
        $locationConditionHousing->number_rooms_where_sleep     = $request->get('number_rooms_where_sleep');
        $locationConditionHousing->beneficiary_id               = $id;
        $locationConditionHousing->save();

        $data = [
            'success'   => true,
            'status'    => 200,
            'message'   => 'Your store processed correctly',
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LocationConditionHousing  $locationConditionHousing
     * @return \Illuminate\Http\Response
     */
    public function show(LocationConditionHousing $locationConditionHousing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LocationConditionHousing  $locationConditionHousing
     * @return \Illuminate\Http\Response
     */
    public function edit(LocationConditionHousing $locationConditionHousing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LocationConditionHousing  $locationConditionHousing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocationConditionHousing $locationConditionHousing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LocationConditionHousing  $locationConditionHousing
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocationConditionHousing $locationConditionHousing)
    {
        //
    }
}
