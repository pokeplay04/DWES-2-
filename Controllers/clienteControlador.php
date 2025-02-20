<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
use App\Models\Operario;
use App\Models\Cliente;
use Illuminate\Http\Request;

class clienteControlador
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::paginate(10); // Recupera los clientes con paginación
        return view('verClientes', compact('clientes'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('AñadirCliente', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cif' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
            'cuenta_corriente' => 'required|string|max:255',
            'pais' => 'required|string|max:50',
            'moneda' => 'required|string|max:10',
            'importe_cuota_mensual' => 'required|string|in:Pendiente,Realizada,Cancelada',
        ]);

        Cliente::create([
            'cif' => $request->cif,
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'cuenta_corriente' => $request->cuenta_corriente,
            'pais' => $request->pais,
            'moneda' => $request->moneda,
            'importe_cuota_mensual' => $request->cuota_mensual,
        ]);

        return redirect()->back()->with('success', 'Cliente registrado exitosamente.');

    }

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
