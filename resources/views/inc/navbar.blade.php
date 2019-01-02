<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'HOTEL NAME') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">ABOUT</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">INQUIRE</a>
                    </li>
                    <li class="nav-item">
                        <a href="/book" class="nav-link">BOOK A ROOM</a>
                    </li>
                @else
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/adminbook" class="dropdown-item">Bookings</a>
                            <a href="/admincontact" class="dropdown-item">Inquiries</a>
                            {{-- <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                            <a class="dropdown-item" href="{{ route('login') }}">Login Change</a>
                            @if (Route::has('register'))
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>





{{-- <nav class="navbar navbar-dark navbar-expand-md bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Hotel Name</a>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#navMenu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">ABOUT</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/contact" class="nav-link">INQUIRE</a>
                </li>
                <li class="nav-item">
                    <a href="/book" class="nav-link">BOOK A ROOM</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
