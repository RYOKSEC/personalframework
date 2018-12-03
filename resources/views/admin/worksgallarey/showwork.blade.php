@extends('layouts.admin')
@section('content')
<br>

<div style="width:600px;">
<a href="/admin/worksgallarey/edit/{{$showwork->id}}" class="btn btn-primary" >Edit</a>

   {!! Form::open(['action' => ['worksgallarey@destroy', $showwork->id], 'method' => 'DELETE' , 'style' => 'float : right']) !!}
      {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    <br>

<h1 style="text-align:center;">{{$showwork->title}}</h1>
<img src="/storage/worksgallarey/{{$showwork->picture}}" style="width:600px;" />
<br>
<br>
<h1 style="text-align:center;">{{$showwork->bio}}</h1>
</div>
@endsection
