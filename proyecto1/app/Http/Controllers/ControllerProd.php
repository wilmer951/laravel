<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Support\Facades\Mail;
use App\Mail\productCreate;

use Illuminate\Http\Request;

class ControllerProd extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $productos = producto::all();
        
        return view('productos.indexpro',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.createpro',[

            'producto'=> new Producto
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pro = request()->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'descripcion' => 'required',
            'valor' => 'numeric'


        ]);
        $producto = new  producto();
        $producto->name = $request->nombre;
        $producto->tipo = $request->tipo;
        $producto->descripcion = $request->descripcion;
        $producto->valor = $request->valor;
        $producto->save();



        Mail::to('wilmer@gmail.com')->queue(new productCreate($pro));
        return redirect()->route('productos.index');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $producto = producto::findOrfail($id);
 


        return view('productos.editpro',compact('producto'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $pro = request()->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'descripcion' => 'required',
            'valor' => 'numeric'


        ]);
        $producto = producto::findOrfail($id);
        $producto->name = $request->nombre;
        $producto->tipo = $request->tipo;
        $producto->descripcion = $request->descripcion;
        $producto->valor = $request->valor;
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        producto::findOrfail($id)->delete();
        
        return redirect()->route('productos.index')->with('operation','Operación exitosa');
    }
}
