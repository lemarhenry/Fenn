@extends('layouts.guest') @section('content')
<style>
     html,
		    body,
		    header,
		    .jarallax {
		      height: 100%;
		    }
            .navbar {
          box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12) !important;
        }
    }
  </style>
</head>

<body class="agency">
  <!-- Navigation & Intro -->
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{route('landing')}}"><img src="{{ url('storage/logo.png') }}" alt="" srcset="" style="width:40%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" data-offset="100">About Us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services" data-offset="20">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio" data-offset="100">Portfolio</a>
            </li>

                <!-- Dropdown -->
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
              <a class="nav-link " href="#contact" data-offset="100">Contact Us</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <!-- Intro Section -->
		<div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://images.unsplash.com/photo-1562447208-3d5f81e66179?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1934&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		    <div class="mask rgba-black-strong">
		        <div class="container h-100 d-flex justify-content-center align-items-center">
		            <div class="row smooth-scroll">
		                <div class="col-md-12">
		                    <div class="blue-text text-center">
								<h2 class="display-3 font-weight-bold pb-4 mb-2 wow fadeIn ">Welcome To FennTech</h2>
								<h3 class="intro-subtext wow fadeIn green-text" data-wow-delay="0.2s">One stop Shop for all things Technology</h3>
							</div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

    </section>
  </header>
  <!-- Navigation & Intro -->
  <!--Main layout-->
  <main>
    <!-- First container -->
    <div class="container">
      <!--Section: About-->
      <section id="about" class="section mt-5 mb-5">
        <!--Secion heading-->
        <h2 class="blue-text text-center text-uppercase font-weight-bold my-5 pb-3 pt-5 wow fadeIn" data-wow-delay="0.2s">About
          us <i class="fas fa-users"></i></h2>
        <!-- First row -->
        <div class="row features-big wow fadeIn" data-wow-delay="0.4s">
          <!-- First column -->
          <div class="col-md-4 mb-5">
            <!--Title-->
            <h5 class="feature-title font-weight-bold mb-1 green-text">01 | Where we started. <i class="fas fa-brain"></i></h5>
            <!-- Text -->
            <p class="grey-text">FennTech started out as Compu-Worx in 2001 on the campus of Northern Caribbean
University in Mandeville, Manchester. Compu-Worx focused on computer sales and services
to students, staff and other persons in the Mandeville and Linstead area; at times operating
from a car, classrooms, clients home and anywhere the services could be rendered.
FennTech Limited was incorporated in February 2007 under the Companies Act of Jamaica
and is a limited liability company. The company has made a paradigm shift to take on new
challenges, reinvented itself, expanded and earned an admirable reputation of service
excellence, increase customers’ experience and expanding the horizon of possibilities of any
sized enterprise to exploit new opportunities in technology.</p>
          </div>
          <!-- /.First column -->
          <!-- Second column -->
          <div class="col-md-4 mb-5">
            <!--Title-->
            <h5 class="feature-title font-weight-bold mb-1 green-text">02 | Who we are. <i class="fas fa-puzzle-piece"></i></h5>
            <!-- Text -->
            <p class="grey-text">FennTech has been forward-thinking in its approach to business solutions. Albeit we are
suppliers of branded and OEM desktop, Laptops, industry standard components, and
accessories, our company is a diversified technology solutions provider whose core
business model is providing a wide range of cutting-edge, innovative and diverse business
solutions and other value added service to enable any small, medium and large
organizations to take advantage of new business opportunities at an affordable cost.</p>
          </div>
          <!-- /.Second column -->
          <!-- Third column -->
          <div class="col-md-4 mb-5">
            <!--Title-->
            <h5 class="feature-title font-weight-bold mb-1 green-text">03 | We are experienced <i class="fas fa-lightbulb"></i></h5>
            <!-- Text -->
            <p class="grey-text">With clients such as Juici Patties, CVM, Kings's Chemical and others let's just say we know a thing or two about technology.</p>
          </div>
          <!-- /.Third column -->
        </div>
        <!-- /.First row -->
      </section>
      <!-- /.Section About -->
    </div>
    <!-- /.First container -->
    <!--Second container-->
    <div class="container-fluid" style="background-image: url('https://images.unsplash.com/photo-1478800907959-cd1621fbd465?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
      <div class="container py-5">
        <!-- Text -->
        <p class="blue-text text-center mt-5"><strong>SINCE 2001</strong> <i class="far fa-calendar-alt"></i></p>
        <h3 class="text-center green-text text-uppercase font-weight-bold my-4 mt-2 ml-3 mr-3 wow fadeIn" data-wow-delay="0.2s">We
          create extraordinary projects for our clients</h3>
        <!-- Text -->
        <p class="blue-text text-center ml-5 mr-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
          animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque
          delectus, beatae maxime temporibus maiores quibusdam quasi. Rem magnam ad perferendis iusto sint tempora ea
          voluptatibus iure, animi excepturi modi aut possimus.</p>
      </div>
    </div>
    <!--/Second container-->
    <!--Third container -->
    <div class="container">
      <!-- Second section -->
      <section id="services" class="section feature-box pt-4 pb-5">
        <!--Secion heading-->
        <h2 class="blue-text text-center text-uppercase font-weight-bold my-5 pb-3 pt-4 wow fadeIn" data-wow-delay="0.2s">What
          we do <i class="fas fa-briefcase"></i></h2>
        <!-- First row -->
        <div class="row text-center wow fadeIn" data-wow-delay="0.4s">
          <!-- First column -->
          <div class="col-md-3 mb-5 pt-1">
            <!--Panel-->
            <div class="card card-body hoverable">
              <i class="fas fa-laptop fa-3x mb-4 grey-text" aria-hidden="true"></i>
              <h5 class="feature-title mb-4">Web design</h5>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.Panel-->
          </div>
          <!-- /First column -->
          <!-- Second column -->
          <div class="col-md-3 mb-5">
            <!--Panel-->
            <div class="card card-body hoverable">
              <i class="far fa-newspaper grey-text fa-3x mb-4" aria-hidden="true"></i>
              <h5 class="feature-title mb-4">Marketing</h5>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.Panel-->
          </div>
          <!-- /.Second column -->
          <!-- Third column -->
          <div class="col-md-3 mb-5">
            <!--Panel-->
            <div class="card card-body hoverable">
              <i class="fas fa-pencil-alt grey-text fa-3x mb-4" aria-hidden="true"></i>
              <h5 class="feature-title mb-4">Branding</h5>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.Panel-->
          </div>
          <!-- /.Third column -->
          <!-- Fourth column -->
          <div class="col-md-3 mb-5">
            <!--Panel-->
            <div class="card card-body hoverable">
              <i class="fas fa-camera-retro grey-text fa-3x mb-4" aria-hidden="true"></i>
              <h5 class="feature-title mb-4">Photography</h5>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.Panel-->
          </div>
          <!-- /.Fourth column -->
        </div>
        <!-- /.First row -->
      </section>
      <!-- /.Second section -->
    </div>
    <!--Third container -->
    <!--Streak-->
    <div class="streak streak-photo streak-long-2" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full page/img%20%287%29.jpg')">
      <div class="mask flex-center rgba-gradient">
        <div class="container">
          <h3 class="text-center blue-text mb-5 text-uppercase font-weight-bold wow fadeIn" data-wow-delay="0.2s">Just a few stats about us!</h3>
          <!--First row-->
          <div class="row blue-text text-center wow fadeIn" data-wow-delay="0.2s">
            <!--First column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">500+</h1>
              <p>Happy clients</p>
            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">600+</h1>
              <p>Projects Completed</p>
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">+85</h1>
              <p>Winning awards</p>
            </div>
            <!--/Third column-->
            <!--Fourth column-->
            <div class="col-md-3">
              <h1 class="white-text mb-1 font-weight-bold">+246</h1>
              <p>Cups of coffee</p>
            </div>
            <!--/Fourth column-->
          </div>
          <!--/First row-->
        </div>
      </div>
    </div>
    <!-- First section -->
    <section id="portfolio" class="section mb-5">

      <!-- Section title -->
      <h2 class="blue-text text-center text-uppercase font-weight-bold my-5 wow fadeIn" data-wow-delay="0.2s">Our
        projects <i class="fas fa-tasks"></i></h2>
      <!-- Section description -->
      <p class="text-center mb-5 w-responsive mx-auto grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing
        elit. Quia iste provident, voluptatum voluptatibus aut modi aspernatur autem impedit, eius, debitis earum
        voluptatem. Quaerat hic aspernatur laborum magni earum. Repellendus voluptatum, magni impedit eaque delectus,
        beatae maxime temporibus maiores quibusdam quasi.</p>
      <!--First row-->
      <div class="row ml-5 mr-5 mt-2 wow fadeIn" data-wow-delay="0.2s">
        <!--First column-->
        <div class="col-lg-3 col-md-6">
          <div class="view overlay z-depth-1">
            <img src="https://mdbootstrap.com/img/Photos/Others/img3.jpg" class="img-fluid " alt="">
            <div class="mask flex-center rgba-gradient">
              <a class="btn  btn-outline-white btn-rounded wow fadeInUp" data-wow-delay="0.2s" href="#tour" data-offset="85">
                <span>SEE MORE</span>
              </a>
            </div>
          </div>
          <p class="text-uppercase text-center grey-text mt-4 mb-4">Lorem ipsum dolor sit</p>
        </div>
        <!--/First column-->
        <!--Second column-->
        <div class="col-lg-3 col-md-6">
          <div class="view overlay z-depth-1 rgba-gradient" ">
            <img src=" https://mdbootstrap.com/img/Photos/Others/img4.jpg
            " class=" img-fluid " alt=" ">
            <div class=" mask flex-center rgba-gradient">
            <a class="btn btn-outline-white btn-rounded wow fadeInUp " data-wow-delay="0.2s " href="#tour " data-offset="85 ">
              <span>SEE MORE</span>
            </a>
          </div>
        </div>
        <p class="text-uppercase text-center grey-text mt-4 mb-4 ">Lorem ipsum dolor sit</p>
      </div>
      <!--/Second column-->

      <!--Third column-->
      <div class="col-lg-3 col-md-6 ">
        <div class="view overlay z-depth-1">
          <img src="https://mdbootstrap.com/img/Photos/Others/img8.jpg" class="img-fluid " alt="">
          <div class="mask flex-center rgba-gradient">
            <a class="btn  btn-outline-white btn-rounded wow fadeInUp" data-wow-delay="0.2s" href="#tour" data-offset="85">
              <span>SEE MORE</span>
            </a>
          </div>
        </div>
        <p class="text-uppercase text-center grey-text mt-4 mb-4">Lorem ipsum dolor sit</p>
      </div>
      <!--/Third column-->
      <!--Fourth column-->
      <div class="col-lg-3 col-md-6">
        <div class="view overlay z-depth-1 rgba-gradient" ">
            <img src=" https://mdbootstrap.com/img/Photos/Others/img6.jpg
          " class=" img-fluid " alt=" ">
            <div class=" mask flex-center rgba-gradient">
          <a class="btn btn-outline-white btn-rounded wow fadeInUp " data-wow-delay="0.2s " href="#tour " data-offset="85 ">
            <span>SEE MORE</span>
          </a>
        </div>
      </div>
      <p class="text-uppercase text-center grey-text mt-4 mb-4 ">Lorem ipsum dolor sit</p>
      </div>
      <!--/Fourth column-->

      </div>
      <!--/First row-->

      <!--Second row-->
      <div class="row ml-5 mr-5 mt-2 wow fadeIn " data-wow-delay="0.2s ">

        <!--First column-->
        <div class="col-lg-3 col-md-6 ">
          <div class="view overlay z-depth-1">
            <img src="https://mdbootstrap.com/img/Photos/Others/img7.jpg" class="img-fluid " alt="">
            <div class="mask flex-center rgba-gradient">
              <a class="btn  btn-outline-white btn-rounded wow fadeInUp" data-wow-delay="0.2s" href="#tour" data-offset="85">
                <span>SEE MORE</span>
              </a>
            </div>
          </div>
          <p class="text-uppercase text-center grey-text mt-4 mb-4">Lorem ipsum dolor sit</p>
        </div>
        <!--/First column-->
        <!--Second column-->
        <div class="col-lg-3 col-md-6">
          <div class="view overlay z-depth-1">
            <img src="https://mdbootstrap.com/img/Photos/Others/img5.jpg " class="img-fluid " alt=" ">
            <div class="mask flex-center  rgba-gradient">
              <a class="btn btn-outline-white btn-rounded wow fadeInUp " data-wow-delay="0.2s " href="#tour "
                data-offset="85 ">
                <span>SEE MORE</span>
              </a>
            </div>
          </div>
          <p class="text-uppercase text-center grey-text mt-4 mb-4 ">Lorem ipsum dolor sit</p>
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class="col-lg-3 col-md-6 ">
          <div class="view overlay z-depth-1">
            <img src="https://mdbootstrap.com/img/Photos/Others/img9.jpg" class="img-fluid " alt="">
            <div class="mask flex-center rgba-gradient">
              <a class="btn  btn-outline-white btn-rounded wow fadeInUp" data-wow-delay="0.2s" href="#tour" data-offset="85">
                <span>SEE MORE</span>
              </a>
            </div>
          </div>
          <p class="text-uppercase text-center grey-text mt-4 mb-4">Lorem ipsum dolor sit</p>
        </div>
        <!--/Third column-->
        <!--Fourth column-->
        <div class="col-lg-3 col-md-6">
          <div class="view overlay z-depth-1 rgba-gradient" ">
            <img src=" https://mdbootstrap.com/img/Photos/Others/img10.jpg
            " class=" img-fluid " alt=" ">
            <div class=" mask flex-center rgba-gradient">
            <a class="btn btn-outline-white btn-rounded wow fadeInUp " data-wow-delay="0.2s " href="#tour " data-offset="85 ">
              <span>SEE MORE</span>
            </a>
          </div>
        </div>
        <p class="text-uppercase text-center grey-text mt-4 mb-4 ">Lorem ipsum dolor sit</p>
      </div>
      <!--/Fourth column-->

      </div>
      <!--/Second row-->

    </section>
    <!-- /.First section -->

    <!--Fourth container-->
    <div class="container-fluid " style="background-color: #eeeeee; ">

      <div class="container py-5 ">

        <!--Items wrapper-->
        <div class="flex-center ">

          <!--First row-->
          <div class="row logos-panel mb-2 wow fadeIn " data-wow-delay="0.4s ">

            <!--First column-->
            <div class="col-md-3 flex-center ">
              <img src="https://mdbootstrap.com/img/Photos/Template/34.png " class="img-fluid ">
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-3 flex-center ">
              <img src="https://mdbootstrap.com/img/Photos/Template/35.png " class="img-fluid ">
            </div>
            <!--/Second column-->

            <!--Third column-->
            <div class="col-md-3 flex-center ">
              <img src="https://mdbootstrap.com/img/Photos/Template/36.png " class="img-fluid ">
            </div>
            <!--/Third column-->

            <!--Fourth column-->
            <div class="col-md-3 flex-center ">
              <img src="https://mdbootstrap.com/img/Photos/Template/37.png " class="img-fluid ">
            </div>
            <!--/Fourth column-->

          </div>
          <!--/First row-->

        </div>
        <!--/Items wrapper-->

      </div>

    </div>
    <!--/Forth container-->

    <!--Fifth container-->
    <div class="container ">

      <!-- Contact -->
      <section id="contact" class="section mb-4 ">

        <!-- Section title -->
        <h2 class="blue-text text-center text-uppercase font-weight-bold my-5 pt-5 wow fadeIn " data-wow-delay="0.2s ">Contact
          us <i class="fas fa-sms"></i></h2>
        <!--Section sescription-->
        <p class="text-center w-responsive mx-auto grey-text mb-5 wow fadeIn " data-wow-delay="0.2s ">Lorem ipsum dolor
          sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi,
          veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <div class="row wow fadeIn " data-wow-delay="0.4s ">

          <!--Grid column-->
          <div class="col-md-8 mb-5">
            <form>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-name" class="form-control">
                    <label for="contact-name" class="">Your name</label>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-email" class="form-control">
                    <label for="contact-email" class="">Your email</label>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-Subject" class="form-control">
                    <label for="contact-Subject" class="">Subject</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                  <div class="md-form mb-0">
                    <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                    <label for="contact-message">Your message</label>
                  </div>

                </div>
              </div>
              <!--Grid row-->

            </form>

            <div class="text-center text-md-left mt-4">
              <a class="btn btn-rounded btn-outline-black waves-effect ">Send <i class="far fa-paper-plane"></i></a>
            </div>
          </div>
          <!--Grid column-->

          <!--Second column-->
          <div class="col-md-4 ">
            <ul class="contact-icons list-unstyled text-center">
              <li><i class="fas fa-map-marker-alt fa-2x "></i>
                <p class="grey-text ">Shop 13, Juici Plaza, Mandeville, Manchester Jamaica W.I.</p>
              </li>

              <li><i class="fas fa-phone fa-2x "></i>
                <p class="grey-text ">+  876-285-0133</p>
              </li>

              <li><i class="fas fa-envelope fa-2x "></i>
                <p class="grey-text ">info@fenntechltd.com</p>
              </li>
            </ul>
          </div>
          <!--.Second column-->

        </div>

      </section>
      <!--/Section: Contact v.2-->

    </div>
    <!-- /.Fifth container -->
  </main>
  <!--/Main layout-->




    <!-- Scrollspy -->
    <div class="dotted-scrollspy clearfix d-none d-sm-block ">
      <ul class="nav smooth-scroll flex-column ">
        <li class="nav-item "><a class="nav-link " href="#home"><span></span></a></li>
        <li class="nav-item "><a class="nav-link " href="#about"><span></span></a></li>
        <li class="nav-item "><a class="nav-link " href="#services"><span></span></a></li>
        <li class="nav-item "><a class="nav-link " href="#portfolio"><span></span></a></li>
        <li class="nav-item "><a class="nav-link " href="#contact"><span></span></a></li>
      </ul>
    </div>

  </footer>
  <!--Footer-->
@endsection

  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript " src="../js/jquery-3.3.1.min.js "></script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript " src="../js/popper.min.js "></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript " src="../js/bootstrap.min.js "></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript " src="../js/mdb.min.js "></script>

  <script>
    // initialize scrollspy
    $('body').scrollspy({
      target: '.dotted-scrollspy'
    });

    // initialize lightbox
    $(function () {
      $("#mdb-lightbox-ui ").load("mdb-addons/mdb-lightbox-ui.html ");
    });

    /* WOW.js init */
    new WOW().init();

    $('.navbar-collapse a').click(function () {
      $(".navbar-collapse ").collapse('hide');
    });

  </script>


