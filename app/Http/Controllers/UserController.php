<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests\User as UserRequests;

class UserController extends Controller
{
        protected $user;
    
        public function __construct (User $user){
            $this->$user =$user;
        }
    
    
        public function index()
        {
            //
            $user = User::all();
            
            //retorna el array en formato json
         return response()->json(['Usuarios'=> $user]);
            return $user;
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
        public function store(UserRequests $request)
        {
            //
          //  return $request;
            $user =$this->user->create($request->all());
    
            return response()->json($user);
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
            $user = User::find($id);
            return $user;
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
        public function update(UserRequests $request, User $user)
        {
            //
            return $request;
            $user->update($request->all());
    
            return response()->json($user);
    
           // return response()->json(new MateriaRequests($post));
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(User $user)
        {
            //
    
            $user ->delete();
            return response()->json('Eliminacion');
        }
        
        
    }
