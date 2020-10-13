<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\FamilyStructure;
use App\Http\Requests\FamilyStructureRequest;
use Illuminate\Http\Request;

class FamilyStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FamilyStructure::with('beneficiary')->get();
        // return FamilyStructure::with('beneficiary', 'beneficiaries.id', '=', 'family_structures.beneficiary_id')->get();
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
    public function store(FamilyStructureRequest $request)
    {
        $document = $request->get('document_number');
        $bene = Beneficiary::where('document_number', '=', $document)->get();
        $id = $bene[0]->id;
       
        $familyStructure = new FamilyStructure();
        $familyStructure->name = $request->get('name');
        $familyStructure->kinship_family = $request->get('kinship_family');
        $familyStructure->birthday = $request->get('birthday');
        $familyStructure->beneficiary_id = $id;

        $familyStructure->save();

        
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
     * @param  \App\FamilyStructure  $familyStructure
     * @return \Illuminate\Http\Response
     */
    public function show(FamilyStructure $familyStructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FamilyStructure  $familyStructure
     * @return \Illuminate\Http\Response
     */
    public function edit(FamilyStructure $familyStructure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FamilyStructure  $familyStructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FamilyStructure $familyStructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FamilyStructure  $familyStructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(FamilyStructure $familyStructure)
    {
        //
    }
}
