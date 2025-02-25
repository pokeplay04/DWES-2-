<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
use App\Models\Operario;
use App\Models\Cliente;
use Illuminate\Http\Request;

class operarioControlador
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operarios = Operario::paginate(10); // Recupera las tareas con paginación
        return view('verOperarios', compact('operarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $operarios = Operario::all();
        return view('AñadirOperario', compact('operarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni' => 'required|string|max:9|regex:/^[0-9]{8}[A-Za-z]$/',
            'nombre' => 'required|string|max:15',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:15|regex:/^[0-9]{9,15}$/',
            'direccion' => 'required|string|max:255',
            'fecha_alta' => 'required|date_format:Y-m-d',
            'tipo' => 'required|string|max:50',
        ]);    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $operario = Operario::findOrFail($id);
        return view('editarOperario', compact('operario'));    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'dni' => 'required|string|max:9|regex:/^[0-9]{8}[A-Za-z]$/',
            'nombre' => 'required|string|max:15',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:15|regex:/^[0-9]{9,15}$/',
            'direccion' => 'required|string|max:255',
            'fecha_alta' => 'required|date_format:Y-m-d',
            'tipo' => 'required|string|max:50',
        ]);

        $operario = Operario::findOrFail($id);
        $operario->update($request->all());

        return redirect()->route('operario.index')->with('success', 'Operario actualizado exitosamente.');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $operario = Operario::findOrFail($id);
        $operario->delete();

        return redirect()->back()->with('success', 'Operario eliminado exitosamente.');    }
}
