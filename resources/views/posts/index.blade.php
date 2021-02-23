@extends('layouts.app')

@section('title')
Posts
@endsection

@section('content')

<main>

    <h1>Posts</h1>
    <a class="btn btn-primary" href="{{route('posts.create')}}">create a new post</a>

    @foreach($posts as $post)

    <div class="box">

        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p>{{ $post->created_at }}</p>
        <p>{{ $post->updated_at }}</p>

        <div class="d-flex">

            <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary mr-3">
                View
            </a>
            <a href="{{ route('posts.edit', ['post'=> $post->id]) }}" class="btn btn-warning mr-3">
                Edit
            </a>
            <form action="{{ route('posts.destroy', ['post'=> $post->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>

        </div>

    </div>

    @endforeach

</main>

@endsection