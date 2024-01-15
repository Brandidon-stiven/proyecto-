<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Productos::all();
        return view('productos.index', ['productos'=> $producto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Codigo_Producto'=>'required|max:10',
            'Nombre'=>'required|max:30',
            'Tipo'=>'required|max:30',
            'Precio'=>'required|max:10',
            'Stock'=>'required|max:10'
        ]);

        $producto = new Productos();

        $producto->Codigo_Producto=$request->input('Codigo_Producto');
        $producto->Nombre = $request->input('Nombre');
        $producto->Tipo = $request->input('Tipo');
        $producto->Precio = $request->input('Precio');
        $producto->Stock=$request->input('Stock');
        $producto->save();

        return redirect()->route('productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto=Productos::findOrFail($id);
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto=Productos::findOrFail($id);
        $producto->Codigo_Producto=$request->input('Codigo_Producto');
        $producto->Nombre=$request->input('Nombre');
        $producto->Tipo=$request->input('Tipo');
        $producto->Precio=$request->input('Precio');
        $producto->Stock=$request->input('Stock');
        $producto->save();

        return redirect()->route('productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto=Productos::findOrFail($id);
        $producto->delete();
        return redirect('/productos');
    }
}
