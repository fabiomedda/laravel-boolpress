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
        <p>Category: {{ $post->categorytwo ? $post->categorytwo->name : '' }}</p>
        <p>Created_at: {{ $post->created_at }}</p>
        <p>Updated_at: {{ $post->updated_at }}</p>

        <div class="d-flex">

            <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary mr-3">
                View
            </a>
            <a href="{{ route('posts.edit', ['post'=> $post->id]) }}" class="btn btn-warning mr-3">
                Edit
            </a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$post->id}}">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal fade text-dark" id="delete-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="post-delete-{{$post->id}}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Post {{$post->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="{{ route('posts.destroy', ['post'=> $post->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Modal -->

        </div>

    </div>

    @endforeach

</main>

@endsection