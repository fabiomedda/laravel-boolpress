@extends('layouts.app')

@section('title')
Categories
@endsection

@section('content')

<main>

    <h1>Categories</h1>
    <a class="btn btn-primary" href="{{route('categories.create')}}">create a new category</a>

    @foreach($categories as $cat)

    <div class="box">

        <h2>{{ $cat->name }}</h2>
        <p>{{ $cat->description }}</p>

        <p>Created_at: {{ $cat->created_at }}</p>
        <p>Updated_at: {{ $cat->updated_at }}</p>

        <div class="d-flex">

            <a href="{{ route('categories.show', ['category' => $cat->id]) }}" class="btn btn-primary mr-3">
                View
            </a>
            <a href="{{ route('categories.edit', ['category'=> $cat->id]) }}" class="btn btn-warning mr-3">
                Edit
            </a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$cat->id}}">
                Delete
            </button>

            <!-- Modal -->
            <div class="modal fade text-dark" id="delete-{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="cat-delete-{{$cat->id}}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete category {{$cat->name}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="{{ route('categories.destroy', ['category'=> $cat->id]) }}" method="post">
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