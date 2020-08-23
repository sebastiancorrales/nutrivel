<?php

namespace App\Http\Controllers;

use App\TypePopulation;
use Illuminate\Http\Request;

class TypePopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TypePopulation::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypePopulation  $typePopulation
     * @return \Illuminate\Http\Response
     */
    public function show(TypePopulation $typePopulation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypePopulation  $typePopulation
     * @return \Illuminate\Http\Response
     */
    public function edit(TypePopulation $typePopulation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypePopulation  $typePopulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypePopulation $typePopulation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypePopulation  $typePopulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypePopulation $typePopulation)
    {
        //
    }
}
