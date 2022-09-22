@extends('layouts.comics')
@section('main-content')
    <section class="single">
        <div class="jumbotron">
        </div>
        <div class="bg-primary py-5">
            <div class="container">
                <div class="cover">
                    <a href=""><img src="{{ $comic->thumb }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-8">
                    <div class="row pt-4">
                        <div class="col">
                            <h2 class="fs-1 fw-bolder">{{ $comic->title }}</h2>
                        </div>
                    </div>
                    <div class="d-flex text-white green border-bottom border-secondary">
                        <div class="py-3 d-flex justify-content-between border-right  border-secondary col-9">
                            <span>U.S. Price: {{ $comic->price }}</span>
                            <span class="text-green">AVAILABLE</span>
                        </div>
                        <span class="px-3 py-3 border-secondary">Check Availability</span>
                    </div>
                    <div>{{ $comic->description }}</div>
                </div>
                <div class="col-4 text-right">
                    <h4 class="text-secondary">ADVERTISEMENT</h4>
                    <img src="{{ asset('../images/adv.jpg') }}" alt="">
                </div>

            </div>
        </div>
        <div class="container">
            <div class="text-start w-45 pb-5">

                <h4 class="pb-3 m-0">Specs</h4>
                <div class="d-flex justify-content-between py-2">
                    <span>Series:</span>

                    <span class="fw-bold azure">{{ $comic->series }}</span>

                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span>U.S. Price:</span>

                    <span class="fw-bold">{{ $comic->price }}</span>

                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span>On Sale Date:</span>

                    <span class="fw-bold">{{ $comic->sale_date }}</span>

                </div>
            </div>
            <div class="d-flex col-6 justify-content-between">

                <a class="btn btn-small btn-primary" href="{{ route('comics.index')}}"> Torna Indietro</a>
                <a class="btn btn-small btn-warning" href="{{ route('comics.edit', $comic->id ) }}"> Modifica</a>
                <form action="{{ route('comics.destroy',$comic->id)}}" method="POST" class="delete-form"
                    data-comic="{{$comic->type}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn ms-2 btn-danger"> Elimina</button>
                </form>
            </div>

        </div>
        </div>
    </section>
    </section>
@endsection
@section('extra-js')
<script src="{{asset('js/deleteConfirmation.js')}}"></script>
@endsection
