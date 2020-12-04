<header class="height_header_general">
    <div class="scroll down fixed_search">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                {{-- logo --}}
                <div class="logo-img">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('img/cover.png')}}" alt="Logo Boolbnb">
                    </a>
                </div>
                {{-- input di ricerca --}}                 
                {{-- <div class="start_search order form-inline my-2 my-lg-0">                     
                    <input type="search" id="address" value="{{isset($address) ? $address : ''}}" class="form-control" placeholder="Where are we going?" />                 
                </div>
                <div class="start_search form-inline my-2 my-lg-0">
                    <button id="search" class="btn btn-dark my-2 my-sm-0 modifing_link">Search</button>
                </div> --}}
                {{-- INPUT SEARCH --}}             
                <div class="start_search order">                 
                    <form class="form-inline my-2 my-lg-0" action="{{route("search")}}" method="GET">                     
                        @method('GET')                 
                        <div class="div_search form-inline my-2 my-lg-0">                     
                            <input class="form-control mr-sm-2 input_search" type="search" id="address" name="search" placeholder="Where are we going?" />                 
                        </div>                 
                        <button class="btn btn-dark my-2 my-sm-0 modifing_link search_write"  class="search_button" type="submit">Search</button>
                    {{-- Icona filtro --}}
                <div class="filter">
                    <i class="fas fa-filter funnel"></i>
                </div>
                {{-- /Icona filtro --}}
                    </form>
                </div>

                {{-- fine input di ricerca --}}
                <button class="navbar-toggler bars" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                <div class="collapse navbar-collapse clearfix">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto float-right text-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown width_100 m_0 p_5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} {{Auth::user()->lastname}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('admin.properties.index')}}">I miei appartamenti<i class="fas fa-home"></i></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                {{-- nostro menu dropdown --}}
                <div class="collapse hamburger clearfix" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto float-right text-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                    
                                    <a class="dropdown-item" href="{{route('admin.properties.index')}}">My apartments</a>
                                </li>
                            <li class="nav-item">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                {{-- nostro menu dropdown --}}



            </div>
        </nav>
        <div class="filter_container d-none">
            {{-- Prendo gli extra, li ciclo e li inserisco nella parte bassa dell'header --}}
            @foreach ($extras as $extra)
            <div class="small_filter_container">
                <label for="{{$extra->id}}"> {{$extra->name}}</label>
                <input type="checkbox" name="extras[]" id="{{$extra->id}}" value="{{$extra->id}}" {{ (is_array(old('extras')) and in_array($extra_id, old('extras'))) ? ' checked' : '' }}>
            </div>
            {{-- Prendo gli extra, li ciclo e li inserisco nella parte bassa dell'header --}}
            @endforeach
            {{-- Barra per selezionare la distanza dalla search--}}
            <div class="bar_tab width_30">
                <div class="bar_up width_25">
                  <div class="bar_up overlay_green"></div>
                </div>
              </div>
            {{-- barra per selezionare la distanza dalla search--}}
          </div>
    </div>
</header>
