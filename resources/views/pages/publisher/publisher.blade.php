@extends('layouts.app')

@section('title', 'Publisher')

@section('sub-title', 'Publisher List')

@section('content')
    <div class="row">
        @foreach ($publishers as $publisher)
            <div class="col-md-3 d-flex align-items-stretch my-md-1">
                <div class="card">
                    <img src="{{ $publisher['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-md-2">{{ $publisher['name'] }}</h5>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="/publisher/{{ $publisher['name'] }}"
                            class="btn btn-primary mt-auto align-self-start">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="my-5">
        {{ $publishers->links() }}
    </div>
@endsection
