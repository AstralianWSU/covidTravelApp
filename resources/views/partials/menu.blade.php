<div>
    <nav id="menu-left">
        <ul>
            <li class="menu-item"><a href="{{ url('/') }}">COVID Info</a></li>
            <li class="menu-item"><a href="{{ route('hotspots')}}">Hotspots</a></li>
            <!-- <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li>
            <li>&nbsp;</li> -->
            

            @auth
                <li class="menu-item"><a href="{{ route('search.place') }}">Search Place</a></li>
                <li class="menu-item"><a href="{{ route('route.builder')}}">Route Builder</a></li>
                <li class="menu-item"><a href="{{ route('history')}}">Reporting</a></li>
            @endauth
        </ul>
    </nav>
</div>
