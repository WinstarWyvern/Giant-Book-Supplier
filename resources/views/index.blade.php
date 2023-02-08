@extends('layouts.app')

@section('title', 'Home')

@section('sub-title', 'Book List')
@section('content')
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-3 d-flex align-items-stretch my-md-1">
                <div class="card">
                    <img src="{{ $book['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book['title'] }}</h5>
                        <p class="card-text mb-auto">by</p>
                        <p class="card-text mb-auto">{{ $book['author'] }}</p>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="/book/{{ $book['title'] }}" class="btn btn-primary mt-auto align-self-start">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="my-5">
        {{ $books->links() }}
    </div>
@endsection
