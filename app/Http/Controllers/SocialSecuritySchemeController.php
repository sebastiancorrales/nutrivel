<?php

namespace App\Http\Controllers;

use App\SocialSecurityScheme;
use Illuminate\Http\Request;

class SocialSecuritySchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SocialSecurityScheme::all();
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
     * @param  \App\SocialSecurityScheme  $socialSecurityScheme
     * @return \Illuminate\Http\Response
     */
    public function show(SocialSecurityScheme $socialSecurityScheme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialSecurityScheme  $socialSecurityScheme
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialSecurityScheme $socialSecurityScheme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialSecurityScheme  $socialSecurityScheme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialSecurityScheme $socialSecurityScheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocialSecurityScheme  $socialSecurityScheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialSecurityScheme $socialSecurityScheme)
    {
        //
    }
}
