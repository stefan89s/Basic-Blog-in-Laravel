@extends('layouts.app')

@section('content')

<hr><hr>

	<div class="show-article">

		<h1> {{ $post->title }} </h1>
		<p> {{ $post->article }} </p>
		<img src="/storage/cover_images/{{$post->cover_image}}">

	</div>

	<a href="/posts/{{$post->id}}/edit"><button class="btn btn-primary space space-top">Edit</button></a>
	<a href="/delete/{{$post->id}}"><button class="btn btn-danger space space-top">Delete</button></a>

@endsection