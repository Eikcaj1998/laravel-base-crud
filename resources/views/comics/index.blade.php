@extends('layouts.comics')
@section('main-content')
    <main>
        <div class="jumbotron">
        </div>
        <div class="container">
            <div class="row">
                <div class=" text-uppercase col-2 flag fw-bold text-light fs-5">current series</div>
                <div class="col-12 wrapper d-flex flex-wrap">
                    @foreach ($comics as $comic)
                        <div class="comic-card">
                            <img src="{{ $comic->thumb }}"alt="">
                            <div class="appair">
                                <div class="d-flex flex-column align-items-center">
                                    <a class="btn btn-primary text-light my-2 p-1 "
                                        href="{{ route('comics.show', $comic->id) }}">
                                        visualizza
                                    </a>
                                    <a class="btn bg-secondary text-light my-2 p-1"
                                        href="{{ route('comics.edit', $comic->id) }}">
                                        modifica
                                    </a>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                                        class="delete-form" data-comic="{{ $comic->type }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn bg-danger text-light my-2 p-1"> Elimina</button>
                                    </form>
                                </div>
                            </div>
                            <h5 class="fw-bold text-light mt-3 fs-6">{{ $comic->series }}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <a href="{{ route('comics.create') }}" class="btn btn-primary fw-bold my-4">Aggiungi Fumetto</a>
                </div>
            </div>
        </div>
        <div class="background">
            <div class="container">
                <div class="row d-flex">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="{{ asset('/images/buy-comics-digital-comics.png') }}" alt="">
                        <h5 class="text-light text-uppercase">DIGITAL COMICS</h5>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="{{ asset('/images/buy-comics-merchandise.png') }}" alt="">
                        <h5 class="text-light text-uppercase">DC MERCHANDISE</h5>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="{{ asset('/images/buy-comics-subscriptions.png') }}" alt="">
                        <h5 class="text-light text-uppercase">SUBSRIPTION</h5>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="{{ asset('/images/buy-comics-shop-locator.png') }}" alt="">
                        <h5 class="text-light text-uppercase">SHOP LOCATOR</h5>
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="{{ asset('/images/buy-dc-power-visa.svg') }}" alt="">
                        <h5 class="text-light text-uppercase">DC POWER VISA</h5>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
@section('extra-js')
    <script src="{{ asset('js/deleteConfirmation.js') }}"></script>
@endsection
