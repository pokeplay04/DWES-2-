<?php
namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Operario;
use App\Models\Cliente;
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
        $clientes = Cliente::all();
        $operarios = Operario::all();
        $provincias = [
            'Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Ávila', 'Badajoz', 'Baleares', 'Barcelona', 'Burgos',
            'Cáceres', 'Cádiz', 'Cantabria', 'Castellón', 'Ciudad Real', 'Córdoba', 'Cuenca', 'Gerona', 'Granada', 'Guadalajara',
            'Guipúzcoa', 'Huelva', 'Huesca', 'Jaén', 'La Coruña', 'La Rioja', 'Las Palmas', 'León', 'Lérida', 'Lugo',
            'Madrid', 'Málaga', 'Murcia', 'Navarra', 'Orense', 'Palencia', 'Pontevedra', 'Salamanca', 'Santa Cruz de Tenerife', 'Segovia',
            'Sevilla', 'Soria', 'Tarragona', 'Teruel', 'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza'
        ];
        return view('AñadirTarea', compact('operarios', 'provincias', 'clientes'));
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
            'provincia' => 'required|string|',
            'estado' => 'required|string|in:P,R,C',
            'fecha_realizacion' => 'required|date',
            'operario' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'anotaciones_anteriores' => 'nullable|string',
            'anotaciones_posteriores' => 'nullable|string',
            'fichero_resumen' => 'nullable|file|mimes:pdf,doc,docx,txt|max:2048',
        ]);
        // if ($request->hasFile('fichero_resumen')) {
        //     $validatedData['fichero_resumen'] = $request->file('fichero_resumen')->store('ficheros_resumen', 'public');
        // }
        Tarea::create([
            'cliente_id' => $request->cliente,
            'operario_id' => $request->empleado,
            'persona_contacto' => $request->nombre_cliente,
            'telefono_contacto' => $request->tel_s_contacto,
            'correo_contacto' => $request->correo,
            'direccion' => $request->direccion,
            'poblacion' => $request->poblacion,
            'codigo_postal' => $request->codigo_postal,
            'provincia' => $request->provincia,
            'descripcion' => $request->descripcion,
            'estado' => $request->estado,
            'fecha_realizacion' => $request->fecha_realizacion,
            'anotaciones_anteriores' => $request->anotaciones_anteriores,
            'anotaciones_posteriores' => $request->anotaciones_posteriores,
            'ficheros'=> $request->ficheros
        ]);

        return redirect()->back()->with('success', 'Tarea creada exitosamente.');
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
