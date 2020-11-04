<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estados;

use App\Http\Requests\Estados as EstadosRequests;

class EstadosController extends Controller
{
    protected $estados;
    
        public function __construct (Estados $estados){
            $this->estados =$estados;
        }
    
    
        public function index()
        {
            //
            $estados = Estados::all();
            
            //retorna el array en formato json
         return response()->json(['Estados'=> $estados]);
            return $estados;
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
        public function store(EstadosRequests $request)
        {
            //
          return $request;
            $estado =$this->estado->create($request->all());
    
            return response()->json($estado); 
           // return $estados;
          //  return response()->json(new Estado($estado), 201);
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $estados = Estados::find($id);
            return $estados;
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
         * @param  int  $idestado
         * @return \Illuminate\Http\Response
         */
        public function update(EstadosRequests $request, Estados $estados)
        {
            //
            //return $request;
            $estados->update($request->all());
    
            return response()->json($estados);
    
           // return response()->json(new MateriaRequests($post));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Estados $estados)
        {
            //
    
            $estados ->delete();
            return response()->json('Eliminacion');
        }
}
