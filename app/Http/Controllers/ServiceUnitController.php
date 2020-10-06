<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceUnitRequest;
use App\ServiceUnit;
use Exception;
use Illuminate\Http\Request;

class ServiceUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServiceUnit::with('covenant')->get();
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
    public function store(ServiceUnitRequest $request)
    {
        $serviceUnit          = new ServiceUnit();
        $serviceUnit->name    = $request->get('name');
        $serviceUnit->address    = $request->get('address');
        $serviceUnit->save();

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
     * @param  \App\ServiceUnit  $serviceUnit
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceUnit $serviceUnit)
    {
        return response()->json($serviceUnit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceUnit  $serviceUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceUnit $serviceUnit)
    {
        return response()->json($serviceUnit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceUnit  $serviceUnit
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUnitRequest $request, ServiceUnit $serviceUnit)
    {
        $serviceUnit->name    = $request->get('name');
        $serviceUnit->address    = $request->get('address');
        $serviceUnit->update();

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
     * @param  \App\ServiceUnit  $serviceUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceUnit $serviceUnit)
    {
        try {
            if ($serviceUnit->delete()) {
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
