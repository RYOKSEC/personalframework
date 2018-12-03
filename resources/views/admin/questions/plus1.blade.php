@extends('layouts.admin')
@section('content')
<div>
  {!! Form::model($id,['method' => 'PATCH','action'=>['AdminQuestionsController@plus1','id'=>$id,]]) !!}
  <div class="form-group">
    {{Form::text('status', '1', ['class' => 'hide'])}}
  </div>
  <h4>this will not delete the question from the database it will just hide it from your questions list</h4>
  {{Form::submit('hide',['class' => 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection
