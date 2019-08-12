
<!--Navbar -->
<Header class="pb-2 nav" >
<nav class="mb-1 navbar navbar-expand-lg  navbar-light fixed-top bg-white">
<a class="navbar-brand" href="{{route('landing')}}"><img src="{{ url('storage/logo.png') }}" alt="" srcset="" style="width:40%"></a>
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
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('homeSecurity')}}">Home & Office Security</a>
                        <a class="dropdown-item" href="{{route('repair')}}">Repair & Installation</a>
                        <a class="dropdown-item" href="{{route('corporate')}}">Corporate & Institutions</a>
                        <a class="dropdown-item" href="{{route('website')}}">Website Design</a>
                        <a class="dropdown-item" href="{{route('networking')}}">Networking & Cabling</a>
                </div>
              </li>
              <li class="nav-item">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Products</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=1_12"> Computer systems</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=1_13">Laptops</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=3">Phones</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=1_14"> Tablets</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=7">Software</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=2">Accessories</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=8">Computer Parts</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=40">Furniture</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=6">Ink & Toners</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=4">Network & WiFi</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=19">Printers</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=product_info&cPath=20&products_id=144">Security</a>
              <a class="dropdown-item" href="http://buy.fenntechltd.com/index.php?main_page=index&cPath=43">UPS & Power</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
          </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->
<br>
<br>

</Header>

