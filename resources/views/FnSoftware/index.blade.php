@extends('layouts.guest') @section('content')

 <style>
        html,
        body,
        header,
        .jarallax {
          height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {
          html,
          body,
          header,
          .jarallax {
            height: 600px;
          }
        }
    </style>

</head>
<body class="developer">

    <!--Navigation & Intro-->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light primary-color fixed-top scrolling-navbar">
            <div class="container">
                  <a class="navbar-brand" href="{{route('landing')}}"><img src="{{ url('storage/logo.png') }}" alt="" srcset="" style="width:40%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link" href="#skills" data-offset="100">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#works" data-offset="100">Our Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" data-offset="100">Contact Us</a>
                        </li>
                    </ul>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Intro Section -->
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://images.unsplash.com/photo-1487014679447-9f8336841d58?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2066&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-white-strong">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row smooth-scroll">
                        <div class="col-md-12 pt-3">
                            <div class="white-text text-center pt-5">
                                <h1 class="display-2 mb-4 dark-grey-text wow fadeIn">Welcome To <br><strong>FennTech Software</strong></h1>
                                <h5 class="text-uppercase font-weight-bold wow fadeIn" data-wow-delay="0.4s"><mark>Our Software and Graphic Design Division</mark></h5>
                                <a href="#about" class="btn btn-floating btn-large wow fadeIn" data-wow-delay="0.4s" data-offset="100"><i class="fas fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--/Navigation & Intro-->

    <!--Main layout-->
    <main>

        <!-- First container -->
        <div class="container">

            <!-- Section About -->
            <section id="about" class="section feature-box mb-5">

                <!-- Section title -->
                <h2 class="text-center text-uppercase my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">About <strong>Us</strong></h2>

                <p class="text-center w-responsive mx-auto wow fadeIn my-5" data-wow-delay="0.2s">FennTech Software is the division of the company that caters to all your software needs. If you get it right, your website will be the best tool you have for promoting your business. Your website will essentially become an online shop-window, accessible to customers all over the world, which means the better it looks and more and up-to-date it is, the better impression it will make on consumers. We have designed many practical websites for businesses, personal and online shopping. </p>

                <!-- First row -->
                <div class="row features-big text-center wow fadeIn" data-wow-delay="0.4s">

                    <!-- First column -->
                    <div class="col-md-4 mb-5">

                        <!--Panel-->
                        <div class="card card-body hoverable">
                            <i class="fas fa-laptop fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Maintenance</h5>
                            <p class="dark-grey-text">If you have pre existing software that you need maintained we are the ones for the job.</p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /First column -->

                    <!-- Second column -->
                    <div class="col-md-4 mb-5">

                        <!--Panel-->
                        <div class="card card-body yellow hoverable">
                            <i class="fas fa-code fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Development</h5>
                            <p class="dark-grey-text">We can develop custom software for any business or use case. </p>
                        </div>
                        {{-- <!--/.Panel--> --}}

                    </div>
                    <!-- /.Second column -->

                    <!-- Third column -->
                    <div class="col-md-4 mb-5">

                        <!--Panel-->
                        <div class="card card-body hoverable">
                            <i class="fas fa-pencil-alt fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Pre Designed</h5>
                            <p class="dark-grey-text">FennTech also develops pre-built software solutions to improve your business process.</p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Third column -->

                </div>
                <!-- /.First row -->

            </section>
            <!-- /.Second section -->

        </div>
        <!-- /.First container -->

        <!--Second container-->
        <div class="container-fluid" style="background-color: #f3f3f5;">
            <div class="container py-4 pt-4">

                <!-- Second section -->
                <section id="skills">
<!-- Second container -->
    <div class="container mb-5">
      <!--Secion heading-->
      <h2 class="text-uppercase text-center font-weight-bold my-4 pt-5 wow fadeIn" data-wow-delay="0.2s">What I do</h2>
      <hr class="between-sections pb-5">
      <!--First row-->
      <div class="row  wow fadeIn" data-wow-delay="0.2s">
        <div class="col-lg-3 col-md-6 text-center mt-1">
          <div class="icon-area">
            <div class="circle-icon">
              <i class="fas fa-desktop fa-4x"></i>
            </div>
            <br>
            <strong>WEB DESIGN</strong>
            <p>We can design cutting edge websites to improve your business process or to market your brand or event to the fullest. </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-1">
          <div class="icon-area">
            <div class="circle-icon ">
              <i class="fas fa-pencil-alt fa-4x"></i>
            </div>
            <br>
            <strong>Content Writing</strong>
            <p>Not sure what to write on your website? No need to fret we have a team of qualified writers who can coin the right terms to make your business stand out from the rest. </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-1">
          <div class="icon-area">
            <div class="circle-icon ">
              <i class="fas fa-store  fa-4x"></i>
            </div>
            <br>
            <strong>E-Commerce</strong>
            <p>Want to start selling online? No problem, we got you covered. With over 5 years of ecommerce deployment experience we can have your online store up and earning in no time. </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-1">
          <div class="icon-area">
            <div class="circle-icon">
              <i class="fas fa-laptop  fa-4x"></i>
            </div>
            <br>
            <strong>UI/UX</strong>
            <p>We have an expert team trained to create the best user experience for your users and also to create the best interfaces that are visually appealing to your viewers.  </p>
          </div>
        </div>
      </div>
      <!--/First row-->
    </div>
    <!-- Second container -->

                </section>
                <!-- /.Second section -->

          </div>
        </div>
        <!--/Second container-->

        <!-- Streak -->
        <div class="streak streak-photo streak-md" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20%2811%29.jpg')">
            <div class="mask flex-center rgba-indigo-strong">
                <div class="white-text smooth-scroll mx-4">
                    <h2 class="h2-responsive wow fadeIn mb-5"><i class="fas fa-quote-left" aria-hidden="true"></i> Design is not just what it looks like and feels like. Design is how it works. <i class="fas fa-quote-right" aria-hidden="true"></i></h2>
                    <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Steve Jobs</h5>
                </div>
            </div>
        </div>
        <!-- /.Streak -->

        <!-- Fourth container -->
        <div class="container">

            <!-- Fourth section -->
            <section id="works" class="section mb-5">

                <!-- Section title -->
                <h2 class="text-center text-uppercase my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Our <strong>Projects</strong></h2>

                <!-- Section description -->
                <p class="text-center w-responsive mx-auto wow fadeIn my-5">Here are a few of the businesses we have helped come online through our services.</p>

                <!-- First row -->
                <div class="row wow fadeIn" data-wow-delay="0.4s">

                    <!-- First column -->
                    <div class="col-md-12 mb-4">

                        <!-- Lightbox -->
                        <div id="mdb-lightbox-ui"></div>

                        <div class="mdb-lightbox">
<div class="container">
  <div class="row">
      {{-- image 1 --}}
    <div class="col-sm">
      <div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  </div>
    </div>
    {{-- image 2 --}}
    <div class="col-sm">
      <div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  </div>
    </div>
    {{-- image 2 --}}
    <div class="col-sm">
     <div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
</div>
    </div>
  </div>
</div>

                        </div>
                        <!-- /.Lightbox -->

                    </div>
                    <!-- /.First column -->

                </div>
                <!-- /.First row -->

            </section>
            <!-- /.Fourth section -->

            <hr>

        </div>
        <!-- /.Fourth container -->

        <!-- Contact form -->
        <div id="contact" class="container">

            <!--Section: Contact v.2-->
            <section class="section contact-section mt-4 mb-5">
                <!--Section heading-->
                <h2 class="text-center text-uppercase my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Contact <strong>Us </strong></h2>
                <!--Section sescription-->
                <p class="text-center w-responsive mx-auto mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">It is pivotal for every business in the 21st century to have a website, do not get left behind contact us to get light years ahead today. </p>
                <div class="row wow fadeIn" data-wow-delay="0.4s">

                    <!--First column-->
                    <div class="col-md-8 mb-5">
                        <form>
                            <!--First row-->
                            <div class="row">

                                <!--First column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form41" class="form-control">
                                            <label for="form41" class="">Your name</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <div class="md-form mb-0">
                                            <input type="text" id="form52" class="form-control">
                                            <label for="form52" class="">Your email</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First row-->

                            <!--Second row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="form51" class="form-control">
                                        <label for="form51" class="">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!--/Second row-->

                            <!--Third row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-lg-12">
                                    <div class="md-form mb-0">
                                        <textarea type="text" id="form76" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="form76">Your message</label>
                                    </div>
                                </div>
                            </div>
                            <!--/.Third row-->
                        </form>
                        <div class="text-center text-md-left mt-4"> <a class="btn btn-primary">Send</a> </div>
                    </div>
                    <!--.First column-->


                </div>

            </section>
            <!--/Section: Contact v.2-->

        </div>
        <!-- Contact form -->



        <!-- /.Customers carousel -->

    </main>
    <!--/Main layout-->

    <!-- Scrollspy -->
    <div class="dotted-scrollspy clearfix d-none d-sm-block">
        <ul class="nav smooth-scroll flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#about"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#skills"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#works"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact"><span></span></a></li>
        </ul>
    </div>
@endsection
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <script>
        // initialize scrollspy
        $('body').scrollspy({
            target: '.dotted-scrollspy'
        });

        // initialize lightbox
        $(function () {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });

        $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });

        /* WOW.js init */
        new WOW().init();

    </script>
