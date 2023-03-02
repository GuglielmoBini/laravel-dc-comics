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
        <div class="d-flex align-items-center justify-content-center">
            <a class="btn btn-primary" href="{{ route('comics.index') }}">Back</a>
            <a class="btn btn-warning ms-3" href="{{ route('comics.edit', $comic->id) }}">Modify</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger ms-3">Delete</button>
            </form>
        </div>
    </div>
</section>
@endsection