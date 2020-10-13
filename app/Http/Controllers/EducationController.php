<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\Education;
use App\Http\Requests\EducationRequest;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Education::all();
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
    public function store(EducationRequest $request)
    {
        $document = $request->get('document_number');
        $bene = Beneficiary::where('document_number', '=', $document)->get();
        $id = $bene[0]->id;

        $education = new Education();
        $education->know_read_write = $request->get('know_read_write');
        $education->study_currently = $request->get('study_currently');
        $education->educational_level = $request->get('educational_level');
        $education->study_day = $request->get('study_day');
        $education->course_study_currently = $request->get('course_study_currently');
        $education->perform_some_course = $request->get('perform_some_course');
        $education->wich_course = $request->get('wich_course');
        $education->beneficiary_id = $id;

        $education->save();

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
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
