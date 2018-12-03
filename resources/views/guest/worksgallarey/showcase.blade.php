@extends('layouts.guest')
@section('content')
<br>

<div style="width:600px;">
<h1 style="text-align:center;">{{$showwork->title}}</h1>
<img src="/storage/worksgallarey/{{$showwork->picture}}" style="width:600px;" />
<br>
<br>
<h1 style="text-align:center;">{{$showwork->bio}}</h1>
</div>
@endsection
