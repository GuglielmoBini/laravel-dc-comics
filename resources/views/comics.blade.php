@extends('layouts.main')
@section('title', 'comics')
@section('content')
<main>
    <!-- main-content -->
    <section id="products">
        <div class="container">
            <h3>Current Series</h3>
            <div class="card-container">
                @foreach($comics as $comic)
                <div class="product-card">
                    <figure>
                        <a href="#"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></a>
                    </figure>
                    <figcaption>{{ $comic['title'] }}</figcaption>
                </div>
                @endforeach
                <a class="load-more" href="#">Load More</a>
            </div>
        </div>
    </section>
</main>
@endsection