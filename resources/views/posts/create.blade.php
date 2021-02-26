@extends('layouts.app')

@section('title')
Create post
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

        <form action="{{ route('posts.store') }}" method="post">

            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title')}}">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control @error('title') is-invalid @enderror" name="body" id="body" rows="3">{{ old('body')}}</textarea>
            </div>
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="form-group">

                <label for="categorytwo_id">Choose a category:</label>
                <select class="form-control" name="categorytwo_id" id="categorytwo_id">
                    <option value="">none</option>
                    @foreach($cat as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
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
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
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