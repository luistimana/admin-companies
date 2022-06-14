@extends('layouts.app')

@section('contentemployeescreate')
<form method="POST" action="{{ route('admin/employees/store') }}" role="form" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @include('admin.employees.forms.index')
</form>
@endsection
