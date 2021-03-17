<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpleadoStoreRequest;
use App\Models\Empleado;
use App\Models\Provincia;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();

        return view('empleados.index', compact(['empleados']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $documentos = TipoDocumento::all();
        $provincias = Provincia::all();

        return view('empleados.create', compact(['documentos','provincias']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoStoreRequest $request)
    {

        $empleado = new Empleado();
        $empleado->id_legajo = $request->input('id_legajo');
        $empleado->apellido = $request->input('apellido');
        $empleado->nombre = $request->input('nombre');
        $empleado->direccion = $request->input('direccion');
        $empleado->localidad = $request->input('localidad');
        $empleado->id_tipo_documento = $request->input('id_tipo_documento');
        $empleado->nro_documento = $request->input('nro_documento');
        $empleado->codigo_postal = $request->input('codigo_postal');
        $empleado->id_provincia = $request->input('id_provincia');

        $empleado->save();

        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
