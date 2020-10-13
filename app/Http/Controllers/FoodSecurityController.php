<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\FoodSecurity;
use App\Http\Requests\FoodSecurityRequest;
use Illuminate\Http\Request;

class FoodSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FoodSecurity::all();
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
    public function store(FoodSecurityRequest $request)
    {
        $document = $request->get('document_number');
        $bene = Beneficiary::where('document_number', '=', $document)->get();
        $id = $bene[0]->id;

        $foodSecurity = new FoodSecurity();
        $foodSecurity->where_get_water = $request->get('where_get_water');
        $foodSecurity->quantity_food_consume_day = $request->get('quantity_food_consume_day');
        $foodSecurity->need_reduce_food_last_months = $request->get('need_reduce_food_last_months');
        $foodSecurity->cause = $request->get('cause');
        $foodSecurity->grains = $request->get('grains');
        $foodSecurity->fruits = $request->get('fruits');
        $foodSecurity->vegetables = $request->get('vegetables');
        $foodSecurity->dairy = $request->get('dairy');
        $foodSecurity->eggs = $request->get('eggs');
        $foodSecurity->beneficiary_id = $id;

        $foodSecurity->save();


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
     * @param  \App\FoodSecurity  $foodSecurity
     * @return \Illuminate\Http\Response
     */
    public function show(FoodSecurity $foodSecurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FoodSecurity  $foodSecurity
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodSecurity $foodSecurity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FoodSecurity  $foodSecurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodSecurity $foodSecurity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FoodSecurity  $foodSecurity
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodSecurity $foodSecurity)
    {
        //
    }
}
