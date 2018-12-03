@extends('layouts.admin')
@section('content')

@switch($Q)
    @case($Q->contains('answerd',0))
    @foreach($Q as $question)
     @if($question->answerd == 0)
      <div style="width:110%; min-width:350px;">
      <div id="app">
      <section class="section" style="background:linear-gradient(to right,#ff00cc , #333399 40%); ">
        <div class="caption">
          <br>
        <h4 style="color:white;">{{$question->question}}</h4>
              <a href="/admin/questions/answer/{{$question->id}}" class="btn btn-primary" style="float:left;" id="answer">Answer</a>
              {!! Form::open(['action' => ['AdminQuestionsController@destroy_question', $question->id], 'method' => 'DELETE' , 'style' => 'float : right']) !!}
                 {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
               {!! Form::close() !!}
          </div>
      </section>
   </div>
  </div>
  @endif
  @endforeach
        @break

    @default
    <h2>No questions to be answerd</h2>
    @endswitch
@endsection
