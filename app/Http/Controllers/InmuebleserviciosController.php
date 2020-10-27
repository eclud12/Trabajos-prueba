<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmuebleservicios;

use App\Http\Requests\Inmuebleservicios as InmuebleserviciosRequests;

class InmuebleserviciosController extends Controller
{
    protected $inmuebleservicios;
    
        public function __construct (Inmuebleservicios $inmuebleservicios){
            $this->$inmuebleservicios =$inmuebleservicios;
        }
    
    
        public function index()
        {
            //
            $inmuebleservicios = Inmuebleservicios::all();
            
            //retorna el array en formato json
         return response()->json(['Inmueble Servicio'=> $inmuebleservicios]);
            return $inmuebleservicios;
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
        public function store(InmuebleserviciosRequests $request)
        {
            //
          //  return $request;
            $inmuebleservicios =$this->inmuebleservicios->create($request->all());
    
            return response()->json($inmuebleservicios); 
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
            $inmuebleservicios = Inmuebleservicios::find($id);
            return $inmuebleservicios;
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
        public function update(InmuebleserviciosRequests $request, Inmuebleservicios $inmuebleservicios)
        {
            //
            //return $request;
            $inmuebleservicios->update($request->all());
    
            return response()->json($inmuebleservicios);
    
           // return response()->json(new MateriaRequests($post));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Inmuebleservicios $inmuebleservicios)
        {
            //
    
            $inmuebleservicios ->delete();
            return response()->json('Eliminacion');
        }
}
