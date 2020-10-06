<?php

namespace App\Http\Controllers;

use App\FuncionalDiversity;
use App\Http\Requests\SimpleRequest;
use Exception;
use Illuminate\Http\Request;

class FuncionalDiversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FuncionalDiversity::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SimpleRequest $request)
    {
        $funcionalDiversity          = new FuncionalDiversity();
        $funcionalDiversity->name    = $request->get('name');
        $funcionalDiversity->save();

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
     * @param  \App\FuncionalDiversity  $funcionalDiversity
     * @return \Illuminate\Http\Response
     */
    public function show(FuncionalDiversity $funcionalDiversity)
    {
        return response()->json($funcionalDiversity);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FuncionalDiversity  $funcionalDiversity
     * @return \Illuminate\Http\Response
     */
    public function edit(FuncionalDiversity $funcionalDiversity)
    {
        return response()->json($funcionalDiversity);
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FuncionalDiversity  $funcionalDiversity
     * @return \Illuminate\Http\Response
     */
    public function update(SimpleRequest $request, FuncionalDiversity $funcionalDiversity)
    {
        $funcionalDiversity->name    = $request->get('name');
        $funcionalDiversity->update();

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
     * @param  \App\FuncionalDiversity  $funcionalDiversity
     * @return \Illuminate\Http\Response
     */
    public function destroy(FuncionalDiversity $funcionalDiversity)
    {
        try
        {
            if($funcionalDiversity->delete()){
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
