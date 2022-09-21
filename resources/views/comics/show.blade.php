@extends('layouts.comics')
@section('main-content')
    <section class="single">
        <div class="jumbotron"></div>
        <div class="bg-primary py-5">
            <div class="container">
                <div class="cover">
                    <a href=""><img src="{{ $product['thumb'] }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-8">
                    <div class="row pt-4">
                        <div class="col">
                            <h2 class="fs-1 fw-bolder">{{ $product['title'] }}</h2>
                        </div>
                    </div>
                    <div class="d-flex text-white green border-bottom border-secondary">
                        <div class="py-3 d-flex justify-content-between border-right  border-secondary col-9">
                            <span>U.S. Price: {{ $product['price'] }}</span>
                            <span class="text-green">AVAILABLE</span>
                        </div>
                        <span class="px-3 py-3 border-secondary">Check Availability</span>
                    </div>
                    <div>{{ $product['description'] }}</div>
                </div>
                <div class="col-4 text-right">
                    <h4 class="text-secondary">ADVERTISEMENT</h4>
                    <img src="{{ asset('../images/adv.jpg') }}" alt="">
                </div>

            </div>
        </div>
        <section class="py-5 grey">
            <div class="container pb-5">
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <div class="row w-45 d-flex flex-column">
                            <h4 class="border-bottom pb-3">Talent</h4>
                            <div class="row m-0">
                                <div class="d-flex justify-content-between m-0 border-bottom">

                                    <span>Art by:</span>
                                    <div class="w-70">
                                        @foreach ($product['artists'] as $artist)
                                            <span class="azure fs-12">{{ $artist }},</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div>
                                </div>
                                <div class="row m-0 border-bottom  py-1">
                                    <div class="d-flex justify-content-between">
                                        <span>Written by:</span>
                                        <div class="w-70">
                                            @foreach ($product['writers'] as $writer)
                                                <span class="azure fs-12">{{ $writer }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row w-45 d-flex flex-column">
                            <h4 class="border-bottom pb-3 m-0">Specs</h4>
                            <div class="border-bottom ">
                                <div class="d-flex justify-content-between py-2">
                                    <span>Series:</span>
                                    <div class="w-70">
                                        <span class="fw-bold azure">{{ $product['series'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom">
                                <span>U.S. Price:</span>
                                <div class="w-70">
                                    <span class="fw-bold">{{ $product['price'] }}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom">
                                <span>On Sale Date:</span>
                                <div class="w-70">
                                    <span class="fw-bold">{{ $product['sale_date'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
