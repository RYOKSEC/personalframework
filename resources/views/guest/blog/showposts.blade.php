@extends('layouts.guest')
@section('blog')
@if(count($posts) == null)
<br>
<div style="min-width:400px">
  <h3>Admin didn't create any post yet</h3>
</div>
@else
<br>
<form action="/search" method="POST" role="search" style="float:left">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search posts by tags"> <span class="input-group-btn">
            <button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-search">search</span>
            </button>
        </span>
    </div>
</form>
<br>
<br>
@foreach($posts as $key => $post)
<div class="row mb-2" style="min-width:900px;">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">
                <p class="text-dark" href="#">{{$post->title}}</p>
              </h3>
              <p class="card-text mb-auto">{{$post->body}}</p>
              @foreach($post->tags as $tag)
              <br>
              <strong>Tags : {{$tag->name}}</strong>
              @endforeach
              <br>
        </div>
      </div>
@endforeach
@endif
@endsection
