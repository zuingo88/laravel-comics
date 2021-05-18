<footer>
    <h2>Dc Comics</h2>
    <ul>
        @foreach ($dc_comics as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    {{-- <h2>Shop</h2>
    <ul>
        @foreach ($shop as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    <h2>Dc</h2>
    <ul>
        @foreach ($dc as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>--}}
    {{-- <h2>Sites</h2>
    <ul>
        @foreach ($sites as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>  --}}
</footer>