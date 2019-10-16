@extends('layouts.guest')
@section('works')
@if(count($works)!=null)
@foreach($works as $work)
<div style="margin-top:10px;  height:600px; width: 400px;">
  <div>
    <article class="card">
      <header class="title-header">
        <h3>{{$work->title}}</h3>
      </header>
      <div class="card-block">
        <div class="img-card">
          <img src="/work_picture/{{$work->picture}}" class="w-100" />
        </div>
        <p class="tagline card-text text-xs-center" style="text-align: center">{{$work->bio}}</p>
        <a href="/worksgallarey/workshowcase/{{$work->id}}/{{$work->slug}}" class="btn btn-primary btn-block" style="text-align: center"><i class="fa fa-eye"></i>View work</a>
      </div>
    </article>
  </div>
  <br>
  @endforeach
  @elseif(count($works) == null)
  <br>
    <h3>No works have been inserted by the admin yet</h2>
  @endif
@endsection
