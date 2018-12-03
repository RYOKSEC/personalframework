@extends('layouts.admin')
@section('content')
@if (count($cvdata) ==! null)
    @include('admin.cv.edit')
@elseif (count($cvdata) == null)
    @include('admin.cv.create')
@endif
@endsection
