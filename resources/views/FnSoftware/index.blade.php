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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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

                <p class="text-center w-responsive mx-auto wow fadeIn my-5" data-wow-delay="0.2s">FennTech Software is the division of the company that caters to all your software needs. </p>

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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-1">
          <div class="icon-area">
            <div class="circle-icon ">
              <i class="fas fa-pencil-alt fa-4x"></i>
            </div>
            <br>
            <strong>BRANDING</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-1">
          <div class="icon-area">
            <div class="circle-icon ">
              <i class="fas fa-paint-brush  fa-4x"></i>
            </div>
            <br>
            <strong>PRINT DESIGN</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mt-1">
          <div class="icon-area">
            <div class="circle-icon">
              <i class="fas fa-laptop  fa-4x"></i>
            </div>
            <br>
            <strong>UI/UX</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
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

        <!-- Third container -->
        <div class="container">

            <!-- Section About -->
            <section class="section feature-box my-5 pb-5">

                <!-- Section title -->
                <h2 class="text-center text-uppercase my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Process of <strong>creating</strong></h2>
                <p class="text-center w-responsive mx-auto wow fadeIn my-5" data-wow-delay="0.2s"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia.</p>

                    <!-- Nav tabs -->
                    <ul class="nav md-tabs nav-justified blue" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">01. Research</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">02. Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">03. Development</a>
                        </li>
                    </ul>
                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                            <br>
                            <div class="row mt-2">
                                <div class="col-2 text-center"> <i class="fas fa-search fa-3x mb-1 grey-text" aria-hidden="true"></i> </div>
                                <div class="col-9 mb-2">
                                    <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Panel 1-->

                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel2" role="tabpanel">
                            <br>
                            <div class="row mt-2">
                                <div class="col-2 text-center"> <i class="fas fa-pencil-alt fa-3x mb-1 grey-text" aria-hidden="true"></i> </div>
                                <div class="col-9 mb-2">
                                    <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Panel 2-->

                        <!--Panel 3-->
                        <div class="tab-pane fade" id="panel3" role="tabpanel">
                            <br>
                            <div class="row mt-2">
                                <div class="col-2 text-center"> <i class="fas fa-code fa-3x mb-1 grey-text" aria-hidden="true"></i> </div>
                                <div class="col-9 mb-2">
                                    <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Panel 3-->
                    </div>
                <!-- /.Tab panels -->
            </section>
            <!-- /.Section -->

        </div>
        <!-- /.Third container -->

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
                <h2 class="text-center text-uppercase my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">My <strong>projects</strong></h2>

                <!-- Section description -->
                <p class="text-center w-responsive mx-auto wow fadeIn my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia iste provident, voluptatum voluptatibus aut modi aspernatur autem impedit, eius, debitis earum voluptatem. Quaerat hic aspernatur laborum magni earum. At, officiis!</p>

                <!-- First row -->
                <div class="row wow fadeIn" data-wow-delay="0.4s">

                    <!-- First column -->
                    <div class="col-md-12 mb-5">

                        <!-- Lightbox -->
                        <div id="mdb-lightbox-ui"></div>

                        <div class="mdb-lightbox">

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(63).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(63).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(66).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(66).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(65).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(65).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(67).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(68).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(68).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(64).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(64).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(69).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(69).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(59).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(59).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(70).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(70).jpg" class="img-fluid z-depth-1">
                                </a>
                            </figure>

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
                <h2 class="text-center text-uppercase my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Contact <strong>me</strong></h2>
                <!--Section sescription-->
                <p class="text-center w-responsive mx-auto mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. </p>
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
                                <div class="col-md-12">
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

                    <!--Second column-->
                    <div class="col-md-4">
                        <ul class="contact-icons list-unstyled text-center">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>New York, NY 10012, USA</p>
                            </li>
                            <li><i class="fas fa-phone fa-2x"></i>
                                <p>+ 01 234 567 89</p>
                            </li>
                            <li><i class="fas fa-envelope fa-2x"></i>
                                <p>contact@mdbootstrap.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--.Second column-->
                </div>

            </section>
            <!--/Section: Contact v.2-->

        </div>
        <!-- Contact form -->

        <div class="streak1">
            <div class="flex-center">
                <ul class="list-unstyled">
                    <li><h2 class="h2-responsive mt-5 wow fadeIn">Want an outstanding project?</h2></li>
                    <li><h5 class="h5-responsive wow fadeIn" data-wow-delay="0.2s">Just send me a message!</h5></li>
                </ul>
            </div>
        </div>

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