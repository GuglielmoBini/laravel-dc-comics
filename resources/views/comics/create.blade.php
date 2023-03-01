@extends('layouts.main')

@section('title', 'Crea Fumetto')

@section('content')
    <section id="create-comic">
        <div class="container py-5">
            <div class="card">
                <div class="card-title d-flex align-items-center justify-content-between my-3">
                    <h1 class="mx-3">Crea il tuo fumetto</h1>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary mx-3">Indietro</a>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Titolo</label>
                                    <input type="text" class="form-control" id="title" placeholder="Titolo Fumetto..." name="title">
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="series" class="form-label">Serie</label>
                                    <input type="text" class="form-control" id="series" placeholder="Serie" name="series">
                                  </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Descrizione</label>
                                    <textarea name="description" id="description" cols="30" class="form-control"></textarea>
                                  </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <label for="thumb" class="form-label">Copertina</label>
                                    <input type="url" class="form-control" id="thumb" placeholder="Immagine di copertina" name="thumb">
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="artists" class="form-label">Artisti</label>
                                    <textarea name="artists" id="artists" cols="30" class="form-control"></textarea>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="writers" class="form-label">Scrittori</label>
                                    <textarea name="writers" id="writers" cols="30" class="form-control"></textarea>
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Tipo</label>
                                    <select class="form-select" id="type" name="type">
                                        <option value="" selected>seleziona tipo</option>
                                        <option>graphic novel</option>
                                        <option>comic book</option>
                                      </select>
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="sale_date" class="form-label">Data Vendita</label>
                                    <input type="text" class="form-control" id="sale_date" placeholder="GG-MM-AAAA" name="sale_date">
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Prezzo</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                  </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

