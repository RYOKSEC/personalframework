@extends('layouts.admin')
@section('content')
@if($Q->contains('answerd',1))
  @foreach($Q as $question)
  @if($question->answerd == 1)
    <br>
    <div class="card" style="background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67)); color:white;min-width:350px;width:110%;">
      <center><h3>{{$question->question}}</h3></center>
      <center><a href="/destroy/question/answer/{{$question->id}}/{{$A[0]['id']}}" class="btn btn-danger">Delete</a></center>
      </div>
      <br>
      @endif
    @endforeach
    @else
    <h2>no Answerd questions yet</h2>
@endif
@endsection
