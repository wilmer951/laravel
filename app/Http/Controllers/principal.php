<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\producto;


class principal extends Controller
{


    public function index(){

        return view('home');

    }

    public function producto(){

        return view('producto');

    }

    public function crear(){

        return view('creacion');
        
        

    }


    public function store(request $request){

        $producto = new producto();
        $producto->name=$request->name;
        $producto->descripcion=$request->descripcion;
        $producto->save();




    }

    
}
