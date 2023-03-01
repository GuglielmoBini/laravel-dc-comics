@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<main>
    <!-- main-content -->
    <section id="comics">
        <div class="container">
            <h4>Current Series</h4>
            <div class="card-container">
                @foreach($comics as $comic)
                <div class="comic-card">
                    <figure>
                        <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></a>
                    </figure>
                    <figcaption>{{ $comic->title }}</figcaption>
                </div>
                @endforeach
                <a class="btn-blue" href="#">Load More</a>
            </div>
        </div>
    </section>
</main>
@endsection