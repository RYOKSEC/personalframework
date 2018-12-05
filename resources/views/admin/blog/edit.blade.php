@extends('layouts.admin')
@section('content')
<h1>Edit post</h1>
<p style="color:red;">Note : fields with * are required</p>
  {!! Form::model($data,['method' => 'PATCH','url'=>['/admin/update/post','id' => $data->id]]) !!}

  <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $data->title, ['class' => 'form-control required' , 'placeholder' => 'Enter a title' ,  'id' => 'title'])}}
  </div>

  <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {{Form::label('slug', 'Slug')}}
    {{Form::text('slug', $data->slug, ['class' => 'form-control required' , 'placeholder' => 'Enter a slug' ,  'id' => 'slug'])}}
    <div>
      <p style="color:green;">Note : you can put it as the title</p>
    </div>
    </div>

  <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $data->body, ['class' => 'form-control required' , 'placeholder' => 'Enter a body' ,])}}
  </div>
    @foreach($data->tags as $tags)
  <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {{Form::label('tag', 'Tags')}}
    {{Form::text('tags', $tags->name, ['class' => 'form-control required' , 'placeholder' => 'Enter some tags'])}}
  </div>
  @endforeach
  <div>
    {{Form::submit('submit',['class' => 'btn btn-primary' ])}}
  </div>

  {!! Form::close() !!}
@endsection
