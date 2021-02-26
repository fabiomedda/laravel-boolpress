@extends('layouts.app')

@section('content')

<main>

    <div class="box">

        <h1>Edit {{$post->title}}</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">

            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
            </div>
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="form-group">

                <label for="categorytwo_id">Choose a category:</label>
                <select class="form-control" name="categorytwo_id" id="categorytwo_id">
                    <option value="">none</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{ $post->categorytwo_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                    @endforeach
                </select>

            </div>
            @error('categorytwo_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="tags">Tags</label>
                <select class="form-control" name="tags[]" id="tags" multiple>
                    @if($tags)
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}" {{ $post->tags->contains($tag) ? 'selected' : '' }}>{{$tag->name}}</option>
                    @endforeach
                    @endif
                </select>
            </div>
            @error('tags')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>

</main>

@endsection