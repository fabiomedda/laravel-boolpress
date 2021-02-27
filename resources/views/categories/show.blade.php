@extends('layouts.app')

@section('content')

<main>
    <div class="box">
        <h1>{{$cat->name}}</h1>
        <p>{{$cat->description}}</p>
        <p>Created_at: {{ $cat->created_at }}</p>
        <p>Updated_at: {{ $cat->updated_at }}</p>
    </div>
</main>

@endsection