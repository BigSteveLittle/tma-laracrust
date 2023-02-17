<!DOCTYPE html>
<html lang="en-AU">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>a {color: green}; a:visited {color: lightblue};</style>
        <title>LaraCrusts</title>
    </head>
    <body>
        <h1>{{ $heading1 }}</h1>
            {{-- Version 1 using 'if' statement. --}}
            {{-- @if(count($crustListing) === 0)
                <p>Sorry Casper no ghosts.</p>
                <p>But there is some beetroot in the fridge.</p>
            @endif --}}
            {{-- Version 2 using 'unless' a native Blade command. --}}
            @unless (count($crustListing) == 0)
                @foreach($crustListing as $crust)
                    <h2><a href="./crusts/{{ $crust['id'] }}">{{ $crust['crustTitle'] }}</a></h2>
                        <p>{{ $crust['crustDescription'] }}</p>
                @endforeach
                @else
                    <p>Sorry Casper no ghosts.</p>
                    <p>But there is some beetroot in the fridge.</p>
            @endunless
    </body>
</html>
