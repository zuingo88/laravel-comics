@extends('layouts.main_layout')
@section('content')

    <main>
        <div class="jumbotron">
            <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">
        </div>

        <section id="cards">

            <div class="container relative">
                <h2 class="absolute">Current series</h2>

                <div class="card_container flex_wrap space_bet">

                    @foreach ($data as $item)
                        <div class="card flex_col">
                            <div class="thumb">
                                <img src="{{ $item['thumb'] }}" alt="">
                            </div>
                            <p>{{ $item['series'] }}</p>
                        </div>
                    @endforeach

                </div>

                <div class="more flex_center">
                    <button class="btn">load more</button>
                </div>
            </div>
        </section>

        <section id="big_stripe">
            <div class="container flex space_bet align_cen">

                <ul class="flex space_bet align_cen">
                    <li class="block flex align_cen">
                        <img src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="">
                        <a href=""><span>Digital Comics</span></a>
                    </li>
                    <li class="block flex align_cen">
                        <img src="{{ asset('/storage/assets/buy-comics-merchandise.png') }}" alt="">
                        <a href=""><span>Dc Merchandise</span></a>
                    </li>
                    <li class="block flex align_cen">
                        <img src="{{ asset('/storage/assets/buy-comics-subscriptions.png') }}" alt="">
                        <a href=""><span>Subscription</span></a>
                    </li>
                    <li class="block flex align_cen">
                        <img src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt="">
                        <a href=""><span>Comic Shop Locator</span></a>
                    </li>
                    <li class="block flex align_cen">
                        <img src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt="">
                        <a href=""><span>Dc Power Visa</span></a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
