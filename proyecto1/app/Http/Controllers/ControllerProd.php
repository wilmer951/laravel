<?php

namespace App\Http\Controllers;
use App\Models\producto;

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
        return view('productos.createpro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'namproreg' => 'required'


        ]);
        $producto = new  producto();
        $producto->name = $request->namproreg;
        $producto->tipo = $request->tipproreg;
        $producto->descripcion = $request->desproreg;
        $producto->valor = $request->valproreg;
        $producto->save();


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
        $producto = producto::findOrfail($id);
        $producto->name = $request->namproedi;
        $producto->tipo = $request->tipproedi;
        $producto->descripcion = $request->desproedi;
        $producto->valor = $request->valproedi;
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
        
        return redirect()->route('productos.index');
    }
}
