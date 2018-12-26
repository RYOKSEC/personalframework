@extends('layouts.guest')
@section('content')
<div class="container">
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>

            @foreach($posts as $key => $post)
            @foreach($post->posts as $posted)
            <div class="row mb-2" style="min-width:900px;">
                    <div class="col-md-6">
                      <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                          <h3 class="mb-0">
                            <p class="text-dark" href="#">{{$posted->title}}</p>
                          </h3>
                          <p class="card-text mb-auto">{{$posted->body}}</p>
                          @foreach($posted->tags as $tag)
                          <br>
                          <strong>Tags : {{$tag->name}}</strong>
                          @endforeach
                    </div>
                  </div>
            @endforeach
            @endforeach
            <a href="/blog" class="btn btn-primary">back</a>
</div>
@endsection
