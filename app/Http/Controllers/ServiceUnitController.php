<?php

namespace App\Http\Controllers;

use App\ServiceUnit;
use Illuminate\Http\Request;

class ServiceUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServiceUnit::with('covenant')->get();
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
     * @param  \App\ServiceUnit  $serviceUnit
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceUnit $serviceUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceUnit  $serviceUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceUnit $serviceUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceUnit  $serviceUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceUnit $serviceUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceUnit  $serviceUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceUnit $serviceUnit)
    {
        //
    }
}
