@php
    $links = config('menu');
@endphp

<header>
    <div class="bg-blue">
        <div class="container">
            <div class="links-header">
                    <a href="#">DC POWER VISA</a>
                    <a href="#">ADDITIONAL DC SITES</a>
            </div>
        </div>
    </div>
    <!-- header navbar -->
    <div class="container">        
        <nav class="navbar">
            <figure>
                <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="dc_logo"></a>
            </figure>
            <ul>
                @foreach ($links as $link)                    
                    <li><a href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
            <input class="search" type="text" placeholder="Search...">
        </nav>
    </div>
    <div class="jumbo"></div>
</header>