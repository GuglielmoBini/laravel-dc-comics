@extends('layouts.main')
@section('title', 'Comics')
@section('content')
    <!-- main-content -->
<section id="comics">
    <div class="container">
        <h4>Current Series</h4>
        @if (session('delete'))
            <div class="alert alert-success text-center p-4 fs-2">{{ session('delete') }}</div>
        @endif
        <div class="card-container row-cols-6">
            @foreach($comics as $comic)
            <div class="comic-card text-center">
                <figure>
                    <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></a>
                    <figcaption>{{ $comic->title }}</figcaption>
                </figure>
            </div>
            @endforeach
            <div class="w-100 my-4 d-flex justify-content-around">
                <a class="btn-blue" href="#">Load More</a>
                <a class="btn-blue" href="{{ route('comics.create') }}">Create your Comic</a>
            </div>
        </div>
    </div>
</section>
@endsection