<?php

namespace App\Http\Controllers;

use App\FuncionalDiversity;
use Illuminate\Http\Request;

class FuncionalDiversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FuncionalDiversity::all();
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
     * @param  \App\FuncionalDiversity  $funcionalDiversity
     * @return \Illuminate\Http\Response
     */
    public function show(FuncionalDiversity $funcionalDiversity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuncionalDiversity  $funcionalDiversity
     * @return \Illuminate\Http\Response
     */
    public function edit(FuncionalDiversity $funcionalDiversity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuncionalDiversity  $funcionalDiversity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FuncionalDiversity $funcionalDiversity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FuncionalDiversity  $funcionalDiversity
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuncionalDiversity $funcionalDiversity)
    {
        //
    }
}
