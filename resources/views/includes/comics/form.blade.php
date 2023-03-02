@if($errors->any())
<div class="alert alert-danger">
    <ul class="p-0 m-0">
        @foreach ($errors->all() as $error)
            <li># {{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($comic->exists)
<form method="POST" action="{{ route('comics.update', $comic->id) }}" novalidate>
@method('PUT')
@else
<form method="POST" action="{{ route('comics.store') }}" novalidate>
@endif

@csrf
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $comic->title) }}">
          </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" required value="{{ old('series', $comic->series) }}">
          </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" class="form-control">{{ old('description', $comic->description) }}</textarea>
          </div>
    </div>
    <div class="col-8">
        <div class="mb-3">
            <label for="thumb" class="form-label">Comic Cover</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
          </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <textarea name="artists" id="artists" cols="30" class="form-control">{{ old('artists', $comic->artists) }}</textarea>
          </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <textarea name="writers" id="writers" cols="30" class="form-control">{{ old('writers', $comic->writers) }}</textarea>
          </div>
    </div>
    <div class="col-4">
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" id="type" name="type" required>
                <option value="">select Type</option>
                <option @if (old('type', $comic->type) === 'graphic novel') selected @endif>graphic novel</option>
                <option @if (old('type', $comic->type) === 'comic book') selected @endif>comic book</option>
              </select>
          </div>
    </div>
    <div class="col-4">
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" placeholder="AAAA-MM-GG" name="sale_date" required value="{{ old('sale_date', $comic->sale_date) }}">
          </div>
    </div>
    <div class="col-4">
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" min="0" max="1000" class="form-control" id="price" name="price" required value="{{ old('price', $comic->price) }}">
          </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-success mt-4 w-25">SEND</button>
</div>
</form>