@extends('layouts.app')

@section('content')

<main>
    <div class="box">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
    </div>
</main>

@endsection