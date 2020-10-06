<?php

namespace App\Http\Controllers;

use App\Covenant;
use App\Http\Requests\SimpleRequest;
use Exception;
use Illuminate\Http\Request;

class CovenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Covenant::all();
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
        $covenant          = new Covenant();
        $covenant->name    = $request->get('name');
        $covenant->save();

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
     * @param  \App\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function show(Covenant $covenant)
    {
        return response()->json($covenant);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Covenant $covenant)
    {
        return response()->json($covenant);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function update(SimpleRequest $request, Covenant $covenant)
    {
        $covenant->name    = $request->get('name');
        $covenant->update();

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
     * @param  \App\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covenant $covenant)
    {
        try
        {
            if($covenant->delete()){
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
