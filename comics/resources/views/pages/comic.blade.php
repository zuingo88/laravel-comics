@extends('layouts.main_layout')
@section('content')

    <div id="comic">
        <div class="blue_head">
            <div class="container relative">
                <div class="comic_thumb absolute">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
            </div>
        </div>

        <section id="comic_features">
            <div class="container flex">
                <div class="left">
                    <h1>{{ $comic['title'] }}</h1>

                    <div class="green_bar flex">
                        <div class="usprice flex space_bet align_cen">
                            <div class="price flex">
                                <p>U.S. Price:&#160</p>
                                <span>{{ $comic['price'] }}</span>
                            </div>
                            <p>AVAILABLE</p>
                        </div>
                        <div class="check">
                            <p>Check Availability <i class="fal fa-arrow-alt-from-bottom"></i></p>
                        </div>
                    </div>

                    <div class="description">
                        <p>{{ $comic['description'] }}</p>
                    </div>
                </div>
                <div class="right">
                    <h3>Advertisement</h3>
                    <img src="{{ asset('/storage/assets/adv.jpg') }}" alt="">
                </div>
            </div>
        </section>

        <section id="specs">

            <div class="container flex">
                <div class="left">
                    <h2>Talent</h2>

                    <ul>
                        <li>
                            <div class="spec_li flex">
                                <div class="titles">
                                    <h4>Art by:</h4>
                                </div>
                                <div class="cont">
                                    <p>
                                        @foreach ($comic['artists'] as $artist)
                                            {{ $loop->last ? $artist : $artist . ',' }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="spec_li flex">
                                <div class="titles">
                                    <h4>Written by:</h4>
                                </div>
                                <div class="cont">
                                    <p>
                                        @foreach ($comic['writers'] as $writer)
                                            {{ $loop->last ? $writer : $writer . ',' }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="right">
                    <h2>Specs</h2>

                    <ul>
                        <li>
                            <div class="spec_li flex">
                                <div class="titles">
                                    <h4>Series:</h4>
                                </div>
                                <div class="cont">
                                    <p>{{ $comic['series'] }}</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="spec_li flex">
                                <div class="titles">
                                    <h4>U.S. Price:</h4>
                                </div>
                                <div class="cont">
                                    <p>{{ $comic['price'] }}</p>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="spec_li flex">
                                <div class="titles">
                                    <h4>On Sale Date:</h4>
                                </div>
                                <div class="cont">
                                    <p>{{ $comic['sale_date'] }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </section>
    </div>

@endsection
