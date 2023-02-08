@extends('layouts.app')

@section('title', 'Book Detail')

@section('content')
    <div class="container mb-md-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="fs-2 bg-secondary text-white">
                    Book Detail
                </div>

                <div class="row">
                        <div class="col-md-12 d-flex align-items-stretch my-md-1">
                            <div class="card">
                                <img src="{{ $book['image'] }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="my-auto">
                                        Title: {{ $book['title'] }}
                                    </p>
                                    <p class="my-auto">
                                        Author: {{ $book['author'] }}
                                    </p>
                                    <p class="my-auto">
                                        Publisher: {{ $book->publisher['name'] }}
                                    </p>
                                    <p class="my-auto">
                                        Year: {{ $book['year'] }}
                                    </p>
                                    <p class="my-auto">
                                        Synopsis: </p>
                                    <p class="my-auto">
                                        {{ $book['synopsis'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
