<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mantenimientos = Mantenimiento::all();
        return view('Mantenimiento.index', ['mantenimientos' => $mantenimientos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuarios::all();
        return view('Mantenimiento.create', ['usuarios' => $usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'precio' => 'required|unique:mantenimientos|max:45',
            'hora' => 'required|max:45',
            'fecha' => 'required|date',
            'tipo' => 'required|max:45',
            'usuarios_id' => 'required',
        ]);

        $mantenimiento = new Mantenimiento();

        $mantenimiento->precio = $request->input('precio');
        $mantenimiento->hora = $request->input('hora');
        $mantenimiento->fecha = $request->input('fecha');
        $mantenimiento->tipo = $request->input('tipo');
        $mantenimiento->usuarios_id = $request->input('usuarios_id');
        $mantenimiento->save();

        return redirect()->route('Mantenimiento')->with('msg', 'Registro Guardado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);
        $usuarios = Usuarios::all();
        return view('Mantenimiento.create', compact('mantenimiento', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'precio' => 'required|max:45',
            'hora' => 'required|max:45',
            'fecha' => 'required|date',
            'tipo' => 'required|max:45',
            'usuarios_id' => 'required',
        ]);

        $mantenimiento = Mantenimiento::findOrFail($id);

        $mantenimiento->precio = $request->input('precio');
        $mantenimiento->hora = $request->input('hora');
        $mantenimiento->fecha = $request->input('fecha');
        $mantenimiento->tipo = $request->input('tipo');
        $mantenimiento->usuarios_id = $request->input('usuarios_id');
        $mantenimiento->save();

        return redirect()->route('Mantenimiento')->with('msg', 'Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);
        $mantenimiento->delete();

        return redirect('/Mantenimiento')->with('msg', 'Registro Eliminado');
    }
}
