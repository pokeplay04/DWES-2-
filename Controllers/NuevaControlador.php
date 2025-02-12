<?php
namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Operario;
use Illuminate\Http\Request;

class NuevaControlador
{
    /**
     * Mostrar todas las tareas
     */
    public function index()
    {
        $tareas = Tarea::paginate(10); // Recupera las tareas con paginación
        return view('verTareas', compact('tareas'));
    }

    /**
     * Mostrar formulario
     */
    public function create()
    {
        return view('AñadirTarea', ["tareas" => Tarea::all(), "operarios" => Operario::all()] );
        
    }

    /**
     * Crear formulario
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'contacto' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'direccion' => 'required|string|max:255',
            'poblacion' => 'required|string|max:255',
            'codigo_postal' => 'required|string|max:10',
            'provincia' => 'required|string|max:2',
            'estado' => 'required|string|in:P,R,C',
            'fecha_realizacion' => 'required|date',
            'operario' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'anotaciones_anteriores' => 'nullable|string',
            'anotaciones_posteriores' => 'nullable|string',
            'fichero_resumen' => 'nullable|file|mimes:pdf,doc,docx,txt|max:2048',
        ]);
        if ($request->hasFile('fichero_resumen')) {
            $validatedData['fichero_resumen'] = $request->file('fichero_resumen')->store('ficheros_resumen', 'public');
        }
        Tarea::create($validatedData);

        return redirect()->route('tareas.index')->with('success', 'Tarea creada exitosamente.');
    }

    /**
     * Mostrar una tarea en específico 
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Mostrar el formulario para modificarlo
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Guardar lo modificado
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Borrar la tarea
     */
    public function destroy(string $id)
    {
        //
    }
}
