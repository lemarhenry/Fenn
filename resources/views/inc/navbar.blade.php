
<!--Navbar -->
<Header class="pb-2 nav" >
<nav class="mb-1 navbar navbar-expand-lg  navbar-light fixed-top ">
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
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Home&Office Security</a>
                        <a class="dropdown-item" href="#">Repair&Installation</a>
                        <a class="dropdown-item" href="{{route('corporate')}}">Corporate&Institutions</a>
                        <a class="dropdown-item" href="#">Website Design</a>
                        <a class="dropdown-item" href="{{route('Networking')}}">Networking&Cabling</a>
                </div>
              </li>
              <li class="nav-item">

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=1_12"> Computer systems</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=1_13">Laptops</a>
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
<br>
<br>

</Header>

