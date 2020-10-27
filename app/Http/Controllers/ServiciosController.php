<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios;

use App\Http\Requests\Servicios as  ServiciosRequests;

class ServiciosController extends Controller
{
    protected $servicios;
    
    public function __construct (Servicios $servicios){
        $this->$servicios =$servicios;
    }


    public function index()
    {
        //
        $servicios = Servicios::all();
        
        //retorna el array en formato json
     return response()->json(['Servicios'=> $servicios]);
        return $servicios;
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
    public function store(ServiciosRequests $request)
    {
        //
      //  return $request;
        $servicios =$this->servicios->create($request->all());

        return response()->json($servicios); 
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
        $servicios = Servicios::find($id);
        return $servicios;
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
    public function update(ServiciosRequests $request, Servicios $servicios)
    {
        //
        //return $request;
        $servicios->update($request->all());

        return response()->json($servicios);

       // return response()->json(new MateriaRequests($post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicios $servicios)
    {
        //

        $servicios ->delete();
        return response()->json('Eliminacion');
    }
}
