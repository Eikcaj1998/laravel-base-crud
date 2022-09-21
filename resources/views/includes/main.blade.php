@php
$series = config('comics');
@endphp

<div class="jumbotron"></div>
<div class="container">
    <div class="row">
        <div class=" text-uppercase col-2 flag fw-bold text-light fs-5">current series</div>
        <div class="col-12 wrapper d-flex flex-wrap">
            @foreach ($series as $serie)
                <div class="comic-card">>
                    <a href="{{ route('single', ['id' => $loop->index]) }}"><img src="{{ $serie['thumb'] }}"
                            alt=""></a>
                    <h5 class="fw-bold text-light mt-3 fs-6">{{ $serie['series'] }}</h5>
                </div>
            @endforeach
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-primary fw-bold">Load More</button>
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
