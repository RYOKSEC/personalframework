@extends('layouts.guest')
@section('questions')

@if($Q->contains('answerd',1))
@foreach($Q as $key => $question)
    @if($question->answerd == 1)
    <br>
    <div class="card" style="background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67)); color:white; width:100%;min-width:350px;">
      <center><h3>{{$question->question}}</h3></center></div>
      <br>
      <div class="card">
        <center><h3>{{$A[$key]->answer}}</h3></center>
      </div>
      @endif
      @endforeach

@else($Q->contains('answerd',0))
<h2>No Answerd questions yet</h2>
@endif
@endsection
