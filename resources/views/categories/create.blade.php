@extends('layouts.app')

@section('title')
Create category
@endsection

@section('content')

<main>

    <div class="box">

        <h1>Create post</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Create Post Form -->

        <form action="{{ route('categories.store') }}" method="post">

            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name')}}">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('name') is-invalid @enderror" name="description" id="description" rows="3">{{ old('description')}}</textarea>
            </div>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>

</main>

@endsection