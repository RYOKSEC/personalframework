@extends('layouts.guest')
@section('content')
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>

            @foreach($details as $post)
            <div class="row mb-2" style="min-width:900px;">
                    <div class="col-md-6">
                      <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                          <h3 class="mb-0">
                            <p class="text-dark" href="#">{{$post->title}}</p>
                          </h3>
                          <p class="card-text mb-auto">{{$post->body}}</p>
                    </div>
                  </div>
            @endforeach
    @endif
</div>
<a href="/blog" class="btn btn-primary">back</a>
@endsection
