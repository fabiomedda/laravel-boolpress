@extends('layouts.app')

@section('title')
Blog
@endsection

@section('content')

<main>
    <h1>Blog</h1>
    
    @foreach($posts as $post)
        <div class="box">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach

</main>



@endsection