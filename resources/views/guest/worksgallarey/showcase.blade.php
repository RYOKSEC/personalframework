@extends('layouts.guest')
@section('content')
<br>

<div style="width:600px;">
<h1 style="text-align:center;">{{$showwork->title}}</h1>
<img src="/work_picture/{{$showwork->picture}}" style="width:600px;" />
<br>
<br>
<h1 style="text-align:center;">{{$showwork->bio}}</h1>
</div>

<div class="form-control" style="min-width:600px;">
  {!! Form::open(['url' => '/guest/store/work/comment']) !!}
  <div class="form-group{{ $errors->has('comment') ? ' has-error' : ''}}">
  <center>{{Form::label('Comment', 'Comment')}}</center>
  {{Form::text('comment', '', ['class' => 'form-control required' , 'placeholder' => 'Enter your comment'])}}
  </div>
  <center>{{Form::submit('submit',['class' => 'btn btn-primary'])}}</center>
</div>
<span style="width:0px;height:0px;">{{Form::text('work_id', $showwork->id, ['class' => 'hide'])}}</span>
{!! Form::close() !!}

@foreach($comments as $comment)

<p class="text-dark" href="#">{{$comment->body}}</p>

@endforeach
@endsection
