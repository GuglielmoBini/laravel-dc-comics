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
                    <form method="POST" action="{{ route('comics.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="series" class="form-label">Series</label>
                                    <input type="text" class="form-control" id="series" name="series">
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" cols="30" class="form-control"></textarea>
                                  </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="thumb" class="form-label">Comic Cover</label>
                                    <input type="url" class="form-control" id="thumb" name="thumb">
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="artists" class="form-label">Artists</label>
                                    <textarea name="artists" id="artists" cols="30" class="form-control"></textarea>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="writers" class="form-label">Writers</label>
                                    <textarea name="writers" id="writers" cols="30" class="form-control"></textarea>
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" id="type" name="type">
                                        <option value="" selected>select Type</option>
                                        <option>graphic novel</option>
                                        <option>comic book</option>
                                      </select>
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="sale_date" class="form-label">Sale Date</label>
                                    <input type="text" class="form-control" id="sale_date" placeholder="AAAA-MM-GG" name="sale_date">
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                  </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success mt-4 w-25">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

