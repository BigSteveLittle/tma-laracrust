<h1>{{ $heading1 }}</h1>
    <h2>{{ $heading2 }}</h2>
        @unless(count($crusts) === 0)
            @foreach($crusts as $crust)
                <h3>{{ $crust['crustTitle'] }}</h3>
                <p>{{ $crust['crustDescription'] }}</p>
            @endforeach
            @else
                <p>Sorry Casper, no ghosts found.</p>
                <p>But there is some beetroot in the fridge.</p>
        @endunless
        @php
            echo 'betroot';
        @endphp