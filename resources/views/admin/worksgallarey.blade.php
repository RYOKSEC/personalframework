@extends('layouts.admin')
@section('content')
<div id="top">
<a href="/admin/worksgallarey/create" class="btn btn-primary">Add new work</a>
</div>
<br>
@if(count($works) == null)
<h3>no works has been inserted yet</h3>
@else
  @foreach($works as $work)
  <div style="margin-top:10px; height:600px; width: 400px;">
    <div class="col">
      <article class="card">
        <header class="title-header">
          <h3>{{$work->title}}</h3>
        </header>
        <div class="card-block">
          <div class="img-card">
            <img src="/work_picture/{{$work->picture}}" class="w-100" />
          </div>
          <p class="tagline card-text text-xs-center" style="text-align: center">{{$work->bio}}</p>
          <a href="/admin/worksgallarey/workshowcase/{{$work->id}}" class="btn btn-primary btn-block" style="text-align: center"><i class="fa fa-eye"></i>View work</a>
        </div>
      </article>
    </div>
    <br>
  @endforeach
@endif
{{$works->links()}}
@endsection
