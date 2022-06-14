@extends('layouts.app')

@section('contentcompaniescreate')
<form method="POST" action="{{ route('admin/companies/store') }}" role="form" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    @include('admin.companies.forms.index')


</form>
@endsection
