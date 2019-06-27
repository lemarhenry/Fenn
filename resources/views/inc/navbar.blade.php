{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                            <a class="nav-link"  href="{{route('fnhome')}}">Home
                              <span class="sr-only">(current)</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                          </li>

                          <!-- Dropdown -->
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Products</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#"> Computer systems</a>
                              <a class="dropdown-item" href="#">Laptops</a>
                              <a class="dropdown-item" href="#"> Tablets</a>
                              <a class="dropdown-item" href="#">Software</a>
                              <a class="dropdown-item" href="#">Accessories</a>
                              <a class="dropdown-item" href="#">Computer Parts</a>
                              <a class="dropdown-item" href="#">Furniture</a>
                              <a class="dropdown-item" href="#">Ink & Toners</a>
                              <a class="dropdown-item" href="#">Network & WiFi</a>
                              <a class="dropdown-item" href="#">Printers</a>
                              <a class="dropdown-item" href="#">Security</a>
                              <a class="dropdown-item" href="#">UPS & Power</a>
                            </div>
                          </li>


                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                          </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
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
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
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
</nav> --}}
<!--Navbar -->

<nav class="mb-1 navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="#"><img src="{{ url('storage/logo.png') }}" alt="" srcset="" style="width:40%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
            <a class="nav-link"  href="{{route('fnhome')}}">
                Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#"> Computer systems</a>
              <a class="dropdown-item" href="#">Laptops</a>
              <a class="dropdown-item" href="#"> Tablets</a>
              <a class="dropdown-item" href="#">Software</a>
              <a class="dropdown-item" href="#">Accessories</a>
              <a class="dropdown-item" href="#">Computer Parts</a>
              <a class="dropdown-item" href="#">Furniture</a>
              <a class="dropdown-item" href="#">Ink & Toners</a>
              <a class="dropdown-item" href="#">Network & WiFi</a>
              <a class="dropdown-item" href="#">Printers</a>
              <a class="dropdown-item" href="#">Security</a>
              <a class="dropdown-item" href="#">UPS & Power</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->
