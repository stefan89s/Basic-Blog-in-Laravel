@extends('layouts.app')

@section('content')

<hr><hr><hr><hr>

	<h1>Aro you sure you want to delete the article:</h1>
	<h1> {{ $post->title }} </h1>

	{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}

		{{ Form::hidden('_method', 'DELETE') }}
		{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block btn-lg space']) }}

	{!! Form::close() !!}

	<a href="/home"><button class="btn btn-block btn-primary btn-lg">Cancel</button></a>

@endsection