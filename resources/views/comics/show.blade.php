@extends('layouts.main')

@section('title', $comic->title)

@section('content')
<section id="single-comic">
    <div class="bg-blue"></div>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>{{ $comic->title }}</h1>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <p>{!! $comic->description !!}</p>

        <ul class="p-0">
            <h3>Talent</h3>
            <ul class="px-3">
                <strong>Written by:</strong>
                <li>{{ $comic->writers }}</li>
                <strong>Art by:</strong>
                <li>{{ $comic->artists }}</li>
            </ul>
            <h3>Specs</h3>
            <ul class="px-3">
                <li><strong>Series: </strong>{{ $comic->series }}</li>
                <li><strong>U.S. Price: </strong>${{ $comic->price }}</li>
                <li><strong>On Sale Date: </strong>{{ $comic->sale_date }}</li>
            </ul>
        </ul>

        <a class="btn-blue" href="{{ route('comics.index') }}">Back</a>
    </div>
</section>
@endsection