<?php

namespace App\Http\Controllers;
use App\Models\proveedor;
use App\Models\compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $compras =  compras::all();
        return view('compras.index', ['compras' => $compras]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all(); // Obtener la lista de proveedores

        return view('compras.create', ['proveedores' => $proveedores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_compra' => 'required|date',
            'valor_compra' => 'required',
            'proveedors_id' => 'required'
        ]);
        /** ES LA DE MODELS */
        $compras = new compras();

        $compras->fecha_compra = $request->input('fecha_compra');
        $compras->valor_compra = $request->input('valor_compra');
        $compras->proveedors_id = $request->input('proveedors_id');
        $compras->save();

        return view('compras.message', ['msg' => "REGISTRO CON EXITO"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $compra = compras::findOrFail($id);
        $proveedores = Proveedor::all();
        return view('compras.create', compact('compra', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_compra' => 'required|date',
            'valor_compra' => 'required',
            'proveedors_id' => 'required'
        ]);

        $compra = compras::findOrFail($id);

        $compra->fecha_compra = $request->input('fecha_compra');
        $compra->valor_compra = $request->input('valor_compra');
        $compra->proveedors_id = $request->input('proveedors_id');
        $compra->save();

        return redirect('/compras')->with('success', 'Compra actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $compra = compras::findOrFail($id);
        $compra->delete();

        return redirect('/compras')->with('success', 'Compra eliminada correctamente');
    }
}
