<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use App\Http\Requests\MainEconomicSupplierRequest;
use App\MainEconomicSupplier;
use Illuminate\Http\Request;

class MainEconomicSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MainEconomicSupplier::all();
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
    public function store(MainEconomicSupplierRequest $request)
    {
        $document = $request->get('document_number');
        $bene = Beneficiary::where('document_number', '=', $document)->get();
        $id = $bene[0]->id;

        $mainEconomicSupplier = new MainEconomicSupplier();
        $mainEconomicSupplier->name = $request->get('name');
        $mainEconomicSupplier->occupation = $request->get('occupation');
        $mainEconomicSupplier->workplace = $request->get('workplace');
        $mainEconomicSupplier->income = $request->get('income');
        $mainEconomicSupplier->expenses = $request->get('expenses');
        $mainEconomicSupplier->beneficiary_id = $id;

        $mainEconomicSupplier->save();

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
     * @param  \App\MainEconomicSupplier  $mainEconomicSupplier
     * @return \Illuminate\Http\Response
     */
    public function show(MainEconomicSupplier $mainEconomicSupplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainEconomicSupplier  $mainEconomicSupplier
     * @return \Illuminate\Http\Response
     */
    public function edit(MainEconomicSupplier $mainEconomicSupplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainEconomicSupplier  $mainEconomicSupplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainEconomicSupplier $mainEconomicSupplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainEconomicSupplier  $mainEconomicSupplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainEconomicSupplier $mainEconomicSupplier)
    {
        //
    }
}
