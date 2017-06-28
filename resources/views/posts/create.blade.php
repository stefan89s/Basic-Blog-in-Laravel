@extends('layouts.app')

@section('content')

<hr><hr>

	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', '', ['class' => 'form-control space', 'placeholder' => 'Title']) }}

		{{ Form::label('article', 'Write the Article') }}
		{{ Form::textarea('article', '', ['class' => 'form-control space', 'placeholder' => 'Writhe an Artilce']) }}

		<div class="form-group">
			{{ Form::file ('cover_image') }}
		</div>

		{{ Form::submit('Post', ['class' => 'btn btn-success btn-block btn-lg']) }}

	{!! Form::close() !!}

@endsection