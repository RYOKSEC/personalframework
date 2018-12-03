<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('network.png') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  </head>
  <body>
  @include('inc.guestnav')
    <main class="poistioning">
        @include('inc.message')
        <h1>Ask question ^_^</h1>
        {!! Form::open(['url' => '/guest/store/question', 'files' => true, 'class' => 'form' , 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : ''}}">
        {{Form::label('Question', 'Question')}}
        {{Form::text('question', '', ['class' => 'form-control required' , 'placeholder' => 'Ask'])}}
        </div>

        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </main>
  </body>
</html>
