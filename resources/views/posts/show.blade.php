@extends('layouts.app')

@section('content')

<main>
    <div class="box">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <p>Category: {{ $post->categorytwo ? $post->categorytwo->name : '' }}</p>
        <div class="tag my-3">
            Tags:
            @if( count($post->tags) > 0 )
            @foreach($post->tags as $tag)
            <span> {{$tag->name}} </span>
            @endforeach
            @else
            <span>N/A</span>
            @endif
        </div>
        <p>Created_at: {{ $post->created_at }}</p>
        <p>Updated_at: {{ $post->updated_at }}</p>
    </div>
</main>

@endsection