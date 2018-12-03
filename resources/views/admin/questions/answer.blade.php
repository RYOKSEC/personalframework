@extends('layouts.admin')
@section('content')

<div style="min-width:300px; width:100%;">
<h1>{{$question->question}}</h1>
  {!! Form::model($question,['method' => 'POST','action'=>['AdminQuestionsController@store_answer','id'=>$question->id,]]) !!}
  <div class="form-group{{ $errors->has('answer') ? ' has-error' : ''}}">
    {{Form::label('Answer', 'Answer')}}
    {{Form::text('answer', '', ['class' => 'form-control required' , 'placeholder' => 'Enter your answer'])}}
  </div>
  {{Form::submit('submit',['class' => 'btn btn-primary'])}}
  <div class="form-group">
    {{Form::text('question_id', $question->id, ['class' => 'hide'])}}
  </div>
</div>
{!! Form::close() !!}
@endsection
