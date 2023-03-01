@php
    $links = config('menu');
@endphp

<header>
    <div class="bg-blue">
        <div class="container">
            <div class="d-flex justify-content-end py-1">
                    <a class="white-links" href="#">DC POWER VISA</a>
                    <a class="white-links" href="#">ADDITIONAL DC SITES</a>
            </div>
        </div>
    </div>
    <!-- header navbar -->
    <div class="container">        
        <nav class="navbar d-flex justify-content-between align-items-center">
            <figure class="m-0">
                <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="dc_logo"></a>
            </figure>
            <ul class="d-flex m-0">
                @foreach ($links as $link)                    
                    <li><a href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
            <input class="search" type="text" placeholder="Search...">
        </nav>
    </div>
    <div class="jumbo"></div>
</header>