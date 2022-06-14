@extends('layouts.app')

@section('contentemployeesactualizar')
<form method="POST" action="{{ route('admin/employees/update',$employees->id) }}" role="form" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @include('admin.employees.forms.index')

</form>
@endsection
