<?php

namespace App\Http\Controllers;

use App\Ethnicity;
use App\Http\Requests\SimpleRequest;
use Exception;
use Illuminate\Http\Request;
use SebastianBergmann\Type\SimpleType;

class EthnicityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ethnicity::all();
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
        $ethnicity          = new Ethnicity();
        $ethnicity->name    = $request->get('name');
        $ethnicity->save();

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
     * @param  \App\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function show(Ethnicity $ethnicity)
    {
        return response()->json($ethnicity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function edit(Ethnicity $ethnicity)
    {
        return response()->json($ethnicity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function update(SimpleRequest $request, Ethnicity $ethnicity)
    {
        $ethnicity->name    = $request->get('name');
        $ethnicity->update();

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
     * @param  \App\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ethnicity $ethnicity)
    {
        try {
            if ($ethnicity->delete()) {
                $data = [
                    'success'   => true,
                    'status'    => 200,
                    'message'   => 'Your destroy processed correctly'
                ];

                return response()->json($data);
            }
        } catch (Exception $e) {
            if ($e->getCode() == 23000) {
                return 'Error 23000';
            }
        }
    }
}
