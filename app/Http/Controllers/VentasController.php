<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventas;

use App\Http\Requests\Ventas as VentasRequests;

class VentasController extends Controller
{
    protected $ventas;
    
        public function __construct (Ventas $ventas){
            $this->$ventas =$ventas;
        }
    
    
        public function index()
        {
            //
            $ventas = Ventas::all();
            
            //retorna el array en formato json
         return response()->json(['Ventas'=> $ventas]);
            return $ventas;
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
        public function store(VentasRequests $request)
        {
            //
          //  return $request;
            $ventas =$this->ventas->create($request->all());
    
            return response()->json($ventas); 
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
            $ventas = Ventas::find($id);
            return $ventas;
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
        public function update(VentasRequests $request, Ventas $ventas)
        {
            //
            //return $request;
            $ventas->update($request->all());
    
            return response()->json($ventas);
    
           // return response()->json(new MateriaRequests($post));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Ventas $ventas)
        {
            //
    
            $ventas ->delete();
            return response()->json('Eliminacion');
        }
    }