@extends('layouts.admin')
@section('content')

@if(count($posts) == null)
<a href="/admin/blog/create" class="btn btn-primary">Create a post</a>
<h3>please create some posts</h3>
@else

<a href="/admin/blog/create" class="btn btn-primary">Create a post</a>
@foreach($posts as $key => $post)
<h3>{{$post->title}}</h3>
<p>{{$post->body}}</p>

@foreach($post->tags as $tag)
<p>{{$tag->name}}</p>
@endforeach

@endforeach
@endif
@endsection
