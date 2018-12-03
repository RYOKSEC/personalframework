@extends('layouts.admin')
@section('content')
<h1>Edit work</h1>

{!! Form::model($work,['method' => 'PATCH','enctype' => 'multipart/form-data' ,'files' => true ,'action'=>['worksgallarey@update_work','id'=>$work->id,]]) !!}

<div class="form-group{{ $errors->has('title') ? ' has-error' : ''}}">
  {{Form::label('title', 'Title')}}
  {{Form::text('title', $work->title, ['class' => 'form-control required' , 'placeholder' => 'Enter a title'])}}
</div>
    <h6 style="color:rgb(36, 148, 22)">NOTE : you should upload the picture again ^_^</h5>
      <br>

<div class="form-group">
  <label for="picture">picture</label>
  <input type="file" name="picture">
</div>



<div class="form-group{{ $errors->has('bio') ? ' has-error' : ''}}">
  {{Form::label('bio', 'Bio')}}
  {{Form::textarea('bio', $work->bio, ['class' => 'form-control required', 'placeholder' => 'Write a bio '])}}
</div>
  {{Form::submit('submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
