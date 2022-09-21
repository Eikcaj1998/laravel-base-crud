@extends('layouts.comics')
@section('main-content')
<div class="container">
    <h1>
        inserisci fumetto
    </h1>
    <form action="{{ route('comics.store')}}" method="POST">
        @csrf
        <div class="row">
            
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input type="text" class="form-control" id="title" placeholder="Titolo" 
                    name="title">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" placeholder="serie" 
                    name="series">
                </div>
            </div>
            <div class="col-4">
                <label for="date" class="form-label">Data di Uscita</label>
                <input type="text" class="form-control" placeholder="Sale Date" name="sale_date">
            </div>
            <div class="col-7">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input type="text" class="form-control" id="thumb" placeholder="Url della copertina" 
                    name="thumb">
                </div>
            </div>
            <div class="col-1">
                <div class="mb-3">
                    <img id="preview" src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png" 
                    alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-6">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" placeholder="Type" name="type">
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea  class="form-control" id="description" rows="5" 
                    name="description"></textarea>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="price" class="form-label">prezzo</label>
                    <input type="number" class="form-control" id="price" min="0" value="0"
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
</div>
@endsection
@section('extra-js')
    <script>
        const placeholder = "https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
        const logoInput = document.getElementById('thumb');
        const previewImg = document.getElementById('preview');
        logoInput.addEventListener('input', function() {
            const url = logoInput.value;
          if (url)  previewImg.src = url;
          else previewImg.src = placeholder;
        });
    </script>
@endsection