<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\Http\Requests\SocialSecurityRequest;
use App\SocialSecurity;
use Illuminate\Http\Request;

class SocialSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SocialSecurity::all();
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
    public function store(SocialSecurityRequest $request)
    {
        $document = $request->get('document_number');
        $bene = Beneficiary::where('document_number', '=', $document)->get();
        $id = $bene[0]->id;

        $socialSecurity = new SocialSecurity();
        $socialSecurity->eps_name = $request->get('eps_name');
        $socialSecurity->afiliation_type = $request->get('afiliation_type');
        $socialSecurity->has_sisben = $request->get('has_sisben');
        $socialSecurity->social_security_scheme_id = $request->get('social_security_scheme_id');
        $socialSecurity->score_sisben = $request->get('score_sisben');
        $socialSecurity->funcional_diversity_id = $request->get('funcional_diversity_id');
        $socialSecurity->beneficiary_id = $id;

        $socialSecurity->save();
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
     * @param  \App\SocialSecurity  $socialSecurity
     * @return \Illuminate\Http\Response
     */
    public function show(SocialSecurity $socialSecurity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialSecurity  $socialSecurity
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialSecurity $socialSecurity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialSecurity  $socialSecurity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialSecurity $socialSecurity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocialSecurity  $socialSecurity
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialSecurity $socialSecurity)
    {
        //
    }
}
