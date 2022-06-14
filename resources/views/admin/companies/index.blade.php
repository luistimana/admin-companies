@extends('layouts.app')

@section('contentcompanies')
<div class="container">
    <a href="{{ route('admin/companies/crear') }}" class="btn btn-success mt-4 ml-3"> Agregar </a>

    <table class="table table-striped table-bordered table-hover" id="tb-lt">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Logo</th>
                <th>Página web</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td class="v-align-middle">{{ $company->nombre }}</td>
                    <td class="v-align-middle">{{ $company->correo }}</td>

                    <td class="v-align-middle">
                        <img src="{!! asset("storage/$company->logo") !!}" width="30" class="img-responsive">
                    </td>
                    <td class="v-align-middle">{{ $company->pagina_web }}</td>
                    <td class="v-align-middle">

                        <form action="{{ route('admin/companies/eliminar', $company->id) }}" method="POST"
                            class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{ route('admin/companies/actualizar', $company->id) }}"
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
