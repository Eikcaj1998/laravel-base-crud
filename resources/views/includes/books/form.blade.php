@if ($comic->exists)
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
    @else
        <form action="{{ route('comics.store', $comic->id) }}" method="POST">
@endif
@csrf
@method('PUT')
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label for="title" class="form-label">titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Titolo" name="title"
                value="{{ $comic->title }}">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" placeholder="serie" name="series"
                value="{{ $comic->series }}">
        </div>
    </div>
    <div class="col-4">
        <label for="date" class="form-label">Data di Uscita</label>
        <input type="text" class="form-control" placeholder="Sale Date" name="sale_date"
            value="{{ $comic->sale_date }}">
    </div>
    <div class="col-7">
        <div class="mb-3">
            <label for="thumb" class="form-label">Copertina</label>
            <input type="text" class="form-control" id="thumb" placeholder="Url della copertina" name="thumb">
        </div>
    </div>
    <div class="col-1">
        <div class="mb-3">
            <img id="preview" src="{{ $comic->thumb ?? config('placeholder') }}" alt="" class="img-fluid">
        </div>
    </div>
    <div class="col-6">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" placeholder="Type" name="type" value="{{ $comic->type }}">
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="5" name="description">{{ $comic->description }}</textarea>
        </div>
    </div>
    <div class="col-4">
        <div class="mb-3">
            <label for="price" class="form-label">prezzo</label>
            <input type="number" class="form-control" id="price" min="0" value="{{ $comic->price ?? '0' }}"
                name="price">
        </div>
    </div>
    <div class="card-footer bg-white d-flex justify-content-between align-items-center px 0">
        <div>
            <button type="reset" class="btn btn-secondary">Cancella</button>
            <button type="subimit" class="btn btn-success">Salva</button>
        </div>
    </div>

</div>
</form>
