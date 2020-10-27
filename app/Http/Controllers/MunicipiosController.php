<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipios;

use App\Http\Requests\Municipios as MunicipiosRequests;

class MunicipiosController extends Controller
{
    protected $municipios;
    
    public function __construct (Municipios $municipios){
        $this->$municipios =$municipios;
    }


    public function index()
    {
        //
        $municipios =Municipios::all();
        
        //retorna el array en formato json
     return response()->json(['Municipios'=> $municipios]);
        return $municipios;
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
    public function store(MunicipiosRequests $request)
    {
        //
      //  return $request;
        $municipios =$this->municipios->create($request->all());

        return response()->json($municipios); 
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
        $municipios = Municipios::find($id);
        return $municipios;
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
    public function update(MunicipiosRequests $request, Municipios $municipios)
    {
        //
        //return $request;
        $municipios->update($request->all());

        return response()->json($municipios);

       // return response()->json(new MateriaRequests($post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipios $municipios)
    {
        //

        $municipios ->delete();
        return response()->json('Eliminacion');
    }
}