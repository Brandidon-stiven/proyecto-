<?php

namespace App\Http\Controllers;

use App\Models\ventas;
use App\Models\usuarios;
use App\Models\empresas_aliadas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas =  ventas::all();
        return view('ventas.index', ['ventas' => $ventas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuarios::all();
        $empresasAliadas = empresas_aliadas::all();
        return view('ventas.create', [
            'usuarios' => $usuarios,
            'empresasAliadas' => $empresasAliadas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_venta' => 'required',
            'valor_total' => 'required',
            'empresas_aliadas_id' => 'required',
            'usuarios_id' => 'required',
        ]);
        /** ES LA DE MODELS */
        $ventas = new ventas();

        $ventas->fecha_venta = $request->input('fecha_venta');
        $ventas->valor_total = $request->input('valor_total');
        $ventas->empresas_aliadas_id = $request->input('empresas_aliadas_id');
        $ventas->usuarios_id = $request->input('usuarios_id');
        $ventas->save();

        return view('ventas.message', ['msg' => "REGISTRO CON EXITO"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $venta = ventas::findOrFail($id);
        $empresasAliadas = empresas_aliadas::all();
        $usuarios = usuarios::all();
        return view('ventas.create', compact('venta', 'empresasAliadas', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_venta' => 'required',
            'valor_total' => 'required',
            'empresas_aliadas_id' => 'required',
            'usuarios_id' => 'required',
        ]);

        $venta = ventas::findOrFail($id);

        $venta->fecha_venta = $request->input('fecha_venta');
        $venta->valor_total = $request->input('valor_total');
        $venta->empresas_aliadas_id = $request->input('empresas_aliadas_id');
        $venta->usuarios_id = $request->input('usuarios_id');
        $venta->save();

        return redirect('/ventas')->with('success', 'Venta actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $venta = ventas::findOrFail($id);
        $venta->delete();

        return redirect('/ventas')->with('success', 'Venta eliminada correctamente');
    }
}
