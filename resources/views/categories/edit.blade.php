@extends('layouts.app')

@section('content')

<main>

    <div class="box">

        <h1>Edit {{$cat->name}}</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('categories.update', ['category' => $cat->id]) }}" method="post">

            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{$cat->name}}">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{$cat->description}}</textarea>
            </div>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>

</main>

@endsection