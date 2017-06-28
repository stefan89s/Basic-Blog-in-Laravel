@extends('layouts.app')

@section('content')

<hr><hr>

	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'Post', 'enctype' => 'multipart/form-data']) !!}

		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', $post->title, ['class' => 'form-control space']) }}

		{{ Form::label('article', 'Edit the Article:') }}
		{{ Form::textarea('article', $post->article, ['class' => 'form-control space']) }}

		<div class="form-group">
			{{ Form::file ('cover_image') }}
		</div>

		{{ Form::hidden('_method', 'PUT') }}
		{{ Form::submit('Edit', ['class' => 'btn btn-success btn-block btn-lg space']) }}

	{!! Form::close() !!}

	<a href="/posts"><button class="btn btn-danger btn-block btn-lg">Cancel</button></a>

@endsection