@extends('layouts.admin')
@section('content')
<h1>Add A work to your gallarey ^_^</h1>

{!! Form::open(['url' => '/admin/store/work', 'files' => true, 'class' => 'form' , 'enctype' => 'multipart/form-data']) !!}
<div class="form-group{{ $errors->has('title') ? ' has-error' : ''}}">
  {{Form::label('title', 'Title')}}
  {{Form::text('title', '', ['class' => 'form-control required' , 'placeholder' => 'Enter a title'])}}
</div>

<div class="form-group">
  <label for="picture">picture</label>
  <input type="file" name="picture">
</div>

<div class="form-group{{ $errors->has('bio') ? ' has-error' : ''}}">
  {{Form::label('bio', 'Bio')}}
  {{Form::textarea('bio', '', ['class' => 'form-control required', 'placeholder' => 'Write a bio '])}}
</div>
  {{Form::submit('submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
