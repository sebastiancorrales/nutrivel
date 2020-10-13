<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\Http\Requests\SocialProgramRequest;
use App\SocialProgram;
use Illuminate\Http\Request;

class SocialProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SocialProgram::all();
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
    public function store(SocialProgramRequest $request)
    {
        $document = $request->get('document_number');
        $bene = Beneficiary::where('document_number', '=', $document)->get();
        $id = $bene[0]->id;

        $socialProgram = new SocialProgram();
        $socialProgram->enrolled_another_social_program = $request->get('enrolled_another_social_program');
        $socialProgram->what_program = $request->get('what_program');
        $socialProgram->some_subsidy_type = $request->get('some_subsidy_type');
        $socialProgram->what_subsidy_type = $request->get('what_subsidy_type');
        $socialProgram->income_received = $request->get('income_received');
        $socialProgram->beneficiary_id = $id;

        $socialProgram->save();
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
     * @param  \App\SocialProgram  $socialProgram
     * @return \Illuminate\Http\Response
     */
    public function show(SocialProgram $socialProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialProgram  $socialProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialProgram $socialProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialProgram  $socialProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialProgram $socialProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocialProgram  $socialProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialProgram $socialProgram)
    {
        //
    }
}
