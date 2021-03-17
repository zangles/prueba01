@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista Empleados</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id Legajo</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Codigo Postal</th>
                            <th scope="col">Pronvicia</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($empleados as $empleado)
                            <tr>
                                <th scope="row">{{ $empleado->id_legajo }}</th>
                                <td>{{ $empleado->nombre }} {{ $empleado->Apellido }}</td>
                                <td>{{ $empleado->direccion }}</td>
                                <td>{{ $empleado->localidad }}</td>
                                <td>{{ $empleado->tipoDocumento->tipo_documento }} {{ $empleado->nro_documento }}</td>
                                <td>{{ $empleado->codigo_postal }}</td>
                                <td>{{ $empleado->provincia->provincia }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
