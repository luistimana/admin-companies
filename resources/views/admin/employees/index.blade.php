@extends('layouts.app')

@section('contentemployees')
<div class="container">
    <a href="{{ route('admin/employees/crear') }}" class="btn btn-success mt-4 ml-3"> Agregar </a>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Compañia</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employed)
                <tr>
                    <td class="v-align-middle">{{ $employed->nombre }}</td>
                    <td class="v-align-middle">{{ $employed->apellido }}</td>
                    <td class="v-align-middle">{{ $employed->companies->nombre }}</td>
                    <td class="v-align-middle">{{ $employed->correo }}</td>
                    <td class="v-align-middle">{{ $employed->telefono }}</td>
                    <td class="v-align-middle">

                        <form action="{{ route('admin/employees/eliminar', $employed->id) }}" method="POST"
                            class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('admin/employees/actualizar', $employed->id) }}"
                                class="btn btn-primary">Editar</a>

                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
