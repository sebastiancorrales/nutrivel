<?php

namespace App\Http\Controllers;

use App\Http\Requests\SimpleRequest;
use App\SocialSecurityScheme;
use Exception;
use Illuminate\Http\Request;

class SocialSecuritySchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SocialSecurityScheme::all();
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
        $program          = new SocialSecurityScheme();
        $program->name    = $request->get('name');
        $program->save();

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
     * @param  \App\SocialSecurityScheme  $socialSecurityScheme
     * @return \Illuminate\Http\Response
     */
    public function show(SocialSecurityScheme $socialSecurityScheme)
    {
        return response()->json($socialSecurityScheme);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialSecurityScheme  $socialSecurityScheme
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialSecurityScheme $socialSecurityScheme)
    {
        return response()->json($socialSecurityScheme);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialSecurityScheme  $socialSecurityScheme
     * @return \Illuminate\Http\Response
     */
    public function update(SimpleRequest $request, SocialSecurityScheme $socialSecurityScheme)
    {
        $socialSecurityScheme->name    = $request->get('name');
        $socialSecurityScheme->update();

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
     * @param  \App\SocialSecurityScheme  $socialSecurityScheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialSecurityScheme $socialSecurityScheme)
    {
        try
        {
            if($socialSecurityScheme->delete()){
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
