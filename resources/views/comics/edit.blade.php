@extends('layouts.comics')
@section('main-content')
    <div class="container">
        <h1>
            Modifica il Fumetto
        </h1>
        @include('includes.books.form')
    </div>
@endsection
@section('extra-js')
    <script>
        const placeholder = "https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png"
        const logoInput = document.getElementById('thumb');
        const previewImg = document.getElementById('preview');
        logoInput.addEventListener('input', function() {
            const url = logoInput.value;
            if (url) previewImg.src = url;
            else previewImg.src = placeholder;
        });
    </script>
@endsection
