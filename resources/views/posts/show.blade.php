@extends('layouts.app')

@section('content')

<main>
    <div class="box">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <p>Category: {{ $post->categorytwo ? $post->categorytwo->name : '' }}</p>
        <div class="tag">
            Tags:
            @if( count($post->tags) > 0 )
            @foreach($post->tags as $tag)
            <span> {{$tag->name}} </span>
            @endforeach
            @else
            <span>N/A</span>
            @endif
        </div>
    </div>
</main>

@endsection