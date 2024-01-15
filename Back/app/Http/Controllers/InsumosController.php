<?php

namespace App\Http\Controllers;

use App\Models\insumos;
use Illuminate\Http\Request;

class InsumosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insumos = Insumos::all();
        return view('insumos.index', ['insumos'=> $insumos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insumos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre'=>'required|max:30',
            'Marca'=>'required|max:30',
            'Tipo'=>'required|max:30',
            'Precio'=>'required|max:10'
        ]);

        $insumo = new Insumos();

        $insumo->Nombre = $request->input('Nombre');
        $insumo->Marca = $request->input('Marca');
        $insumo->Tipo = $request->input('Tipo');
        $insumo->Precio = $request->input('Precio');
        $insumo->save();

        return view('insumos.message', ['msg'=>"Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(insumos $insumos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $insumo=Insumos::findOrFail($id);
        return view('insumos.edit',compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $insumo=Insumos::findOrFail($id);
        $insumo->Nombre=$request->input('Nombre');
        $insumo->Marca=$request->input('Marca');
        $insumo->Tipo=$request->input('Tipo');
        $insumo->Precio=$request->input('Precio');
        $insumo->save();

        return redirect()->route('insumos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $insumo=Insumos::findOrFail($id);
        $insumo->delete();
        return redirect('/insumos');
    }
}
