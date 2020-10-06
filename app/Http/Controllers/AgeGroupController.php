<?php

namespace App\Http\Controllers;

use App\AgeGroup;
use App\Http\Requests\SimpleRequest;
use Exception;
use Illuminate\Http\Request;

class AgeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AgeGroup::all();
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
        $ageGroup          = new AgeGroup();
        $ageGroup->name    = $request->get('name');
        $ageGroup->save();

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
     * @param  \App\AgeGroup  $ageGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AgeGroup $ageGroup)
    {
        return response()->json($ageGroup);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AgeGroup  $ageGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AgeGroup $ageGroup)
    {
        return response()->json($ageGroup);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AgeGroup  $ageGroup
     * @return \Illuminate\Http\Response
     */
    public function update(SimpleRequest $request, AgeGroup $ageGroup)
    {
        $ageGroup->name    = $request->get('name');
        $ageGroup->update();

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
     * @param  \App\AgeGroup  $ageGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgeGroup $ageGroup)
    {
        try
        {
            if($ageGroup->delete()){
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
