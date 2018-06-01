<nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-md ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      <li><a href="{{ URL::to('home') }}" >Home</a></li>
                      <li><a href="{{ URL::to('document') }}" >Documents</a></li>
                      <li><a href="https://weatherdataapi.blogspot.ug/p/weather-data-api.html">Blog</a></li>
                      <li><a href="{{ URL::to('about') }}">About</a></li>
                      <li><a href="{{ URL::to('demo') }}">Demo</a></li>
          
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ URL::to('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ URL::to('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                            <a class="dropdown-item dropdown-toggle" href="{{ URL::to('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ URL::to('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


