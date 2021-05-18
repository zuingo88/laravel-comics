<footer>
    <div class="container relative">
        <div class="ul_container flex">
            <div class="column_one">
                <h2>Dc Comics</h2>
                <ul>
                    @foreach ($dc_comics as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <h2>Shop</h2>
                <ul>
                    @foreach ($shop as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="column_two">
                <h2>Dc</h2>
                <ul>
                    @foreach ($dc as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="column_three">
                <h2>Sites</h2>
                <ul>
                    @foreach ($sites as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <img class="big_dc absolute" src="{{ asset('/storage/assets/dc-logo-bg.png') }}" alt="">

        <div class=""></div>
    </div>
</footer>
