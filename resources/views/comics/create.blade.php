@extends('layouts.main')

@section('title', 'Crea Fumetto')

@section('content')
    <section id="create-comic">
        <div class="container py-5">
            <div class="card p-4">
                <div class="card-title d-flex align-items-center justify-content-between my-3">
                    <h1 class="mx-3 text-uppercase text-danger-emphasis">Create your Comic</h1>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary mx-3">Back</a>
                </div>
                <div class="card-body">
                    @include('includes.comics.form')
                </div>
            </div>
        </div>
    </section>
@endsection

