<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmuebles;

use App\Http\Requests\Inmuebles as InmueblesRequests;

class InmueblesController extends Controller
{
    protected $inmuebles;
    
    public function __construct (Inmuebles $inmuebles){
        $this->$inmuebles =$inmuebles;
    }


    public function index()
    {
        //
        $inmuebles = Inmuebles::all();
        
        //retorna el array en formato json
     return response()->json(['Inmuebles'=> $inmuebles]);
        return $inmuebles;
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
    public function store(InmueblesRequests $request)
    {
        //
      //  return $request;
        $inmuebles =$this->inmuebles->create($request->all());

        return response()->json($inmuebles); 
       // return $materia;
      //  return response()->json(new MateriasS($materia), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inmuebles = Inmuebles::find($id);
        return $inmuebles;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InmueblesRequests $request,Inmuebles $inmuebles)
    {
        //
        //return $request;
        $inmuebles->update($request->all());

        return response()->json($inmuebles);

       // return response()->json(new MateriaRequests($post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmuebles $inmuebles)
    {
        //

        $inmuebles ->delete();
        return response()->json('Eliminacion');
    }
}
