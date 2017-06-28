@extends('layouts.app')

@section('content')

<hr>

<div class="sidebar-articles" >

	<h3>All Articles</h3>

	@foreach($posts as $post)

		<a href="/posts/{{$post->id}}"><p><strong> {{ substr($post->title, 0, 70) }} {{ strlen($post->title) > 70 ? "..." : "" }} </strong></p></a>

		<img src="/storage/cover_images/{{$post->cover_image}}">

		<small> <strong> {{ date('d m Y', strtotime($post->created_at)) }} </strong></small>
				
	@endforeach

	
		{{ $posts->links() }}


</div>

@foreach($posts as $post)

	<div class="article-box">

		<a href="/posts/{{$post->id}}"><h1> {{ substr($post->title, 0, 70) }} {{ strlen($post->title) > 70 ? "..." : "" }} </h1></a>
		<p> {{ substr($post->article, 0, 500) }} {{ strlen($post->article) > 500 ? "..." : "" }} </p> 
		<h4> <strong> {{ date('d m Y', strtotime($post->created_at)) }} </strong></h4>

		<img src="/storage/cover_images/{{$post->cover_image}}">		

	</div>


@endforeach
<div class="paginate">
	{{ $posts->links() }}
</div>



@endsection