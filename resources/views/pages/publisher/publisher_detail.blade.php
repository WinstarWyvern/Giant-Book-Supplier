@extends('layouts.app')

@section('title', 'Publisher Detail')

@section('sub-title')
    <p>{{ $publisher['name'] }}</p>
    <p>Address - {{ $publisher['address'] }}</p>
    <p>Phone - {{ $publisher['phone'] }}</p>
    <p>Email - {{ $publisher['email'] }}</p>
@endsection

@section('content')
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-3 d-flex align-items-stretch my-md-1">
                <div class="card">
                    <img src="{{ $book->books[$loop->iteration]['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->books[$loop->iteration]['title'] }}</h5>
                        <p class="card-text mb-auto">by</p>
                        <p class="card-text mb-auto">{{ $book->books[$loop->iteration]['author'] }}</p>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="/book/{{ $book->books[$loop->iteration]['title'] }}"
                            class="btn btn-primary mt-auto align-self-start">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="my-5">
        {{ $books->links() }}
    </div>
@endsection
