@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"> <hr>
                <div class="panel-heading space"><h1>Dashboard<h1></div>

                <a href="/posts/create"><button class="btn btn-primary btn-lg space">Create New Article</button></a>

                    @foreach($posts as $post)

                        <a href="/posts/{{$post->id}}"><h1> {{ substr($post->title, 0, 70) }} {{ strlen($post->title) > 70 ? "..." : "" }} </h1></a>
                        <p> {{ substr($post->article, 0, 500) }} {{ strlen($post->article) > 500 ? "..." : "" }} </p>
                        <a href="/posts/{{$post->id}}/edit"><button class="btn btn-primary">Edit</button></a>
                        <a href="/delete/{{$post->id}}"><button class="btn btn-danger">Delete</button></a>

                    @endforeach

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
