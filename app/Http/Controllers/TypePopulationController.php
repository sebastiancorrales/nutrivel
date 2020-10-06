<?php

namespace App\Http\Controllers;

use App\Http\Requests\SimpleRequest;
use App\TypePopulation;
use Exception;
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
    public function store(SimpleRequest $request)
    {

        $typePopulation          = new TypePopulation();
        $typePopulation->name    = $request->get('name');
        $typePopulation->save();

        $data = [
            'success'   => true,
            'status'    => 200,
            'message'   => 'Your store processed correctly'
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypePopulation  $typePopulation
     * @return \Illuminate\Http\Response
     */
    public function show(TypePopulation $typePopulation)
    {
        // $typePopulations = TypePopulation::find($typePopulation);
        // echo "hola";
        return response()->json($typePopulation);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypePopulation  $typePopulation
     * @return \Illuminate\Http\Response
     */
    public function edit(TypePopulation $typePopulation)
    {
        // $typePopulations = TypePopulation::find($typePopulation);

        return response()->json($typePopulation);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypePopulation  $typePopulation
     * @return \Illuminate\Http\Response
     */
    public function update(SimpleRequest $request, TypePopulation $typePopulation)
    {
        $typePopulation->name    = $request->get('name');
        $typePopulation->update();

        $data = [
            'success'   => true,
            'status'    => 200,
            'message'   => 'Your update processed correctly'
        ];

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypePopulation  $typePopulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypePopulation $typePopulation)
    {
        try
        {
            if($typePopulation->delete()){
                $data = [
                    'success'   => true,
                    'status'    => 200,
                    'message'   => 'Your destroy processed correctly'
                ];
        
                return response()->json($data);
            }
        }
        catch(Exception $e) {
            if($e->getCode()==23000) {
                return 'Error 23000';
            }
        }
    }
}
