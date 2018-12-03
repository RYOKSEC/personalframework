@extends('layouts.admin')
@section('content')
<h1>Create Post</h1>
{!! Form::open(['url' => '/admin/store/post']) !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
  {{Form::label('title', 'Title')}}
  {{Form::text('title', '', ['class' => 'form-control required' , 'placeholder' => 'Enter a title' ,  'id' => 'title'])}}
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
  {{Form::label('slug', 'Slug')}}
  {{Form::text('slug', '', ['class' => 'form-control required' , 'placeholder' => 'Enter a slug' ,  'id' => 'slug'])}}
  <div>
    <p style="color:green;">Note : you can put it as the title</p>
  </div>
  </div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
  {{Form::label('body', 'Body')}}
  {{Form::textarea('body', '', ['class' => 'form-control required' , 'placeholder' => 'Enter a body' ,])}}
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
  {{Form::label('tag', 'Tags')}}
  {{Form::text('tags', '', ['class' => 'form-control required' , 'placeholder' => 'Enter some tags'])}}
</div>

<div>
  {{Form::submit('submit',['class' => 'btn btn-primary' ])}}
</div>

{!! Form::close() !!}
@endsection
