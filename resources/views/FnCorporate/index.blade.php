

@extends('layouts.guest') @section('content')
<style>
    html,
        body,
        header,
        .jarallax {
          height: 100%;
        }

                .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
    </style>

</head>

<body class="legal">

  <!--Navigation & Intro-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
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
              <a class="nav-link" href="#about" data-offset="40">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services" data-offset="100">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#lawyers" data-offset="100">Lawyers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials" data-offset="100">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" data-offset="100">Contact</a>
            </li>
          </ul>
          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/full%20page/img%20%282%29.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-strong">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row smooth-scroll">
            <div class="col-md-12">
              <div class="white-text text-center">
                <h2 class="display-4 font-weight-bold text-uppercase yellow-text mb-4 wow fadeIn">Legal services</h2>
                <h4 class="mt-2 mb-4 wow fadeIn" data-wow-delay="0.2s">Professional legal services</h4>
                <p class="grey-text wow fadeIn" data-wow-delay="0.2s">- EST. 1995 -</p>
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
      <section id="about" class="section pt-3 pb-5 mb-5">

        <!--Secion heading-->
        <h2 class="yellow-text text-center text-uppercase font-weight-bold mt-4 mb-5 py-5 wow fadeIn" data-wow-delay="0.2s">About
          us</h2>

        <!-- First row -->
        <div class="row wow fadeIn" data-wow-delay="0.2s">

          <!-- Place for photo -->
          <div class="col-lg-4 mb-2">
            <div class="view"> <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2829%29.jpg"
                class="img-fluid z-depth-1" alt="">
              <div class="mask  rgba-brown-strong smooth-scroll flex-center">
                <a class="btn  btn-outline-white btn-lgs wow fadeInUp" data-wow-delay="0.2s" href="#services"
                  data-offset="100"> <span>GET MORE INFORMATION</span> </a>
              </div>
            </div>
          </div>

          <!-- Text content -->
          <div class="col-lg-7 offset-lg-1">
            <h5 class="font-weight-bold mb-3">We are a group of legal professionals with experience in seventeen areas
              of law.</h5>
            <p align="justify"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta
                ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus,
                beatae maxime temporibus maiores quibusdam quasi. </span><span>Rem magnam ad perferendis iusto sint
                tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam
                odit quia velit. Qui expedita sit quo, maxime molestiae. Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Sequi sapiente, consequuntur dolore praesentium non suscipit.</span></p>
          </div>

        </div>
        <!-- /.First row -->

      </section>
      <!-- /.Section About -->

    </div>
    <!-- /.First container -->

    <!-- streak -->

    <div class="streak streak-photo streak-md" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/City/12-col/img%20%2824%29.jpg')">
      <div class="flex-center rgba-indigo-light mask">
        <div class="white-text smooth-scroll mx-4">
          <h2 class="h2-responsive mb-5 wow fadeIn">If you have any legal problem in your life ... We are available</h2>
          <div class="text-center">
            <a href="#contact" class="btn btn-outline-white wow fadeIn " data-offset="100" data-wow-delay="0.2s">Contact
              us</a>
          </div>
        </div>
      </div>
    </div>

    <!-- /.streak -->

    <!-- First container -->
    <div class="container">

      <!--Section: About-->
      <section id="services" class="section my-5 pb-4">

        <!--Secion heading-->
        <h2 class="yellow-text text-center text-uppercase font-weight-bold mt-4 mb-5 pt-5 pb-4 wow fadeIn"
          data-wow-delay="0.2s">Our services</h2>

        <div class="row features-small wow fadeIn" data-wow-delay="0.4s">

          <!--First column-->
          <div class="col-md-4">

            <!--First row-->
            <div class="row mb-4">
              <div class="col-2">
                <i class="fas fa-users fa-2x mb-1 yellow-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-weight-bold mb-2">| Family law</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda deleniti hic.</p>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-gavel fa-2x mb-1 yellow-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-weight-bold mb-2">| Criminal law</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda deleniti hic.</p>
              </div>
            </div>
            <!--/Second row-->

          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4">

            <!--First row-->
            <div class="row mb-4">
              <div class="col-2">
                <i class="fas fa-car fa-2x mb-1 yellow-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-weight-bold mb-2">| Auto accident law</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda deleniti hic.</p>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="far fa-money-bill-alt fa-2x mb-1 yellow-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-weight-bold mb-2">| Money laundering</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda deleniti hic.</p>
              </div>
            </div>
            <!--/Second row-->

          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4">

            <!--First row-->
            <div class="row mb-4">
              <div class="col-2">
                <i class="fas fa-university fa-2x mb-1 yellow-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-weight-bold mb-2">| Real estate law</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda deleniti hic.</p>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-shopping-cart fa-2x mb-1 yellow-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-weight-bold mb-2">| Shoplifting</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda deleniti hic.</p>
              </div>
            </div>
            <!--/Second row-->

          </div>
          <!--/Third column-->

        </div>
        <!--/.First row-->

      </section>
      <!-- /.Section About -->

    </div>
    <!-- /.First container -->


    <!--Third container-->
    <div class="container-fluid" style="background-color: #f3f3f5;">
      <div class="container py-5">

        <!--Section: Testimonials v.2-->
        <section id="testimonials" class="section mb-5">

          <!--Section heading-->
          <h2 class="yellow-text text-center text-uppercase font-weight-bold mt-5 mb-5  wow fadeIn" data-wow-delay="0.2s">What
            clients say</h2>
          <div class="wrapper-carousel-fix">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide wow fadeIn carousel-fade"
              data-ride="carousel" data-interval="false">

              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">

                  <div class="testimonial text-center">
                    <!--Avatar-->
                    <div class="avatar mb-4">

                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid"
                        alt="First sample avatar image">

                    </div>

                    <!--Content-->
                    <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                      eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur
                      adipisicing elit. Dolore cum accusamus
                      eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit
                      quidem dolor veniam vel repudiandae excepturi tenetur illo.</p>

                    <div class="mt-1">
                      <h5><strong>John Doe</strong></h5>
                      <p>Founder at ET Company</p>
                    </div>
                    <!--Review-->
                    <div class="yellow-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star-half-alt"> </i>
                    </div>
                  </div>
                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class="carousel-item">

                  <div class="testimonial text-center">
                    <!--Avatar-->
                    <div class="avatar mb-4">

                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid"
                        alt="Second sample avatar image">

                    </div>
                    <!--Content-->
                    <p><i class="fas fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                      odit
                      aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                      porro quisquam est, qui dolorem
                      ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                      incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

                    <div class="mt-1">
                      <h5><strong>Maria Kate</strong></h5>
                      <h5>Photographer at Studio LA</h5>
                    </div>

                    <!--Review-->
                    <div class="yellow-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                    </div>

                  </div>

                </div>
                <!--/Second slide-->

                <!--Third slide-->
                <div class="carousel-item">

                  <div class="testimonial text-center">
                    <!--Avatar-->
                    <div class="avatar mb-4">

                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-fluid"
                        alt="Third sample avatar image">

                    </div>
                    <!--Content-->
                    <p><i class="fas fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt mollit
                      anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                      doloremque laudantium , totam rem aperiam, eaque ipsa quae ab illo.</p>

                    <div class="mt-1">
                      <h5><strong>Anna Deynah</strong></h5>
                      <h5>Front-end Developer in NY</h5>
                    </div>

                    <!--Review-->
                    <div class="yellow-text">
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="fas fa-star"> </i>
                      <i class="far fa-star"> </i>
                    </div>

                  </div>

                </div>
                <!--/Third slide-->
              </div>
              <!--/.Slides-->

              <!--Controls-->
              <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
                data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
                data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>
        </section>
        <!--Section: Testimonials v.2-->

      </div>
    </div>
    <!--/Third container-->

    <!-- Second container -->
    <div class="container">

      <!-- Third section -->
      <section id="lawyers" class="section team-section mb-5">

        <!-- Section title -->
        <h2 class="yellow-text text-center text-uppercase font-weight-bold my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Our
          Lawyers Team</h2>

        <!-- Section description -->
        <p class="text-center w-responsive mx-auto my-5 wow fadeIn">Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Quia iste provident, voluptatum voluptatibus aut modi aspernatur autem impedit, eius, debitis earum
          voluptatem. Quaerat hic aspernatur laborum magni earum.</p>

        <!-- First row -->
        <div class="row text-center">

          <!--First column-->
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="avatar">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(5).jpg" class="z-depth-1">
            </div>
            <h4 class="font-weight-bold my-4">Maria Kate</h4>
            <p class="grey-text">CRIMINAL LAWYER</p>

            <!--Facebook-->
            <a type="button" class="btn-floating btn-fb btn-primary"><i class="fab fa-facebook-f"></i></a>
            <!--Pinterest-->
            <a type="button" class="btn-floating btn-primary"><i class="fab fa-pinterest"></i></a>
            <!--Instagram-->
            <a type="button" class="btn-floating btn-primary"><i class="fab fa-instagram"></i></a>

          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="avatar">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(12).jpg" class="z-depth-1">
            </div>
            <h4 class="font-weight-bold my-4">Sarah Melyah</h4>
            <p class="grey-text">BANK & FINANCIAL LAWYER</p>

            <!--Google +-->
            <a type="button" class="btn-floating btn-gplus btn-secondary"><i class="fab fa-google-plus-g"></i></a>
            <!--Facebook-->
            <a type="button" class="btn-floating btn-fb btn-secondary"><i class="fab fa-facebook-f"></i></a>
            <!--GitHub-->
            <a type="button" class="btn-floating btn-git btn-secondary"><i class="fab fa-github"></i></a>

          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="avatar">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="z-depth-1">
            </div>
            <h4 class="font-weight-bold my-4">John Doe</h4>
            <p class="grey-text">FAMILY LAWYER</p>

            <!--Linkedin-->
            <a type="button" class="btn-floating btn-li btn-primary"><i class="fab fa-linkedin-in"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-tw btn-primary"><i class="fab fa-twitter"></i></a>
            <!--Dribbble-->
            <a type="button" class="btn-floating btn-dribbble btn-primary"><i class="fab fa-dribbble"></i></a>

          </div>
          <!--/Third column-->

          <!--Third column-->
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="avatar">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-11.jpg" class="z-depth-1">
            </div>
            <h4 class="font-weight-bold my-4">Anna Smith</h4>
            <p class="grey-text">BUSINESS LAWYER</p>

            <!--Linkedin-->
            <a type="button" class="btn-floating btn-li btn-secondary"><i class="fab fa-linkedin-in"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-tw btn-secondary"><i class="fab fa-twitter"></i></a>
            <!--Dribbble-->
            <a type="button" class="btn-floating btn-dribbble btn-secondary"><i class="fab fa-dribbble"></i></a>

          </div>
          <!--/Third column-->
        </div>

      </section>
      <!-- /.Third section -->

      <hr class="between-sections">

      <!--Section: Contact-->
      <section id="contact" class="section pb-5 mb-5">

        <!--Section heading-->
        <h2 class="yellow-text text-center text-uppercase font-weight-bold my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Contact</h2>
        <!--Section sescription-->
        <p class="text-center w-responsive mx-auto mb-5 pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
          porro a pariatur accusamus veniam.</p>

        <div class="row">

          <!--First column-->
          <div class="col-lg-5 mb-2">

            <!--Form with header-->
            <div class="card">

              <div class="card-body">
                <!--Header-->
                <div class="form-header primary-color">
                  <h3><i class="fas fa-envelope"></i> Write to us:</h3>
                </div>

                <p>Well write rarely, but only the best content.</p>
                <br>

                <!--Body-->
                <div class="md-form">
                  <i class="fas fa-user prefix"></i>
                  <input type="text" id="form3" class="form-control">
                  <label for="form3">Your name</label>
                </div>

                <div class="md-form">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="text" id="form2" class="form-control">
                  <label for="form2">Your email</label>
                </div>

                <div class="md-form">
                  <i class="fas fa-tag prefix"></i>
                  <input type="text" id="form32" class="form-control">
                  <label for="form32">Subject</label>
                </div>

                <div class="md-form">
                  <i class="fas fa-pencil-alt prefix"></i>
                  <textarea type="text" id="form8" class="md-textarea form-control" rows="3"></textarea>
                  <label for="form8">Icon Prefix</label>
                </div>

                <div class="text-center">
                  <button class="btn btn-secondary mt-3">Submit</button>
                </div>

              </div>

            </div>
            <!--/Form with header-->

          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-lg-7">

            <!--Google map-->
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px">
              <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                style="border:0" allowfullscreen></iframe>
            </div>
            <br>
            <!--Buttons-->
            <div class="row text-center mt-1">
              <div class="col-md-4">
                <a class=" mb-2 btn-floating btn-secondary"><i class="fas fa-map-marker-alt"></i></a>
                <p>New York, NY 10012</p>
                <p>United States</p>
              </div>

              <div class="col-md-4">
                <a class="mb-2 btn-floating btn-secondary"><i class="fas fa-phone"></i></a>
                <p>+ 01 234 567 89</p>
                <p>Mon - Fri, 8:00-22:00</p>
              </div>

              <div class="col-md-4">
                <a class="mb-2 btn-floating btn-secondary"><i class="fas fa-envelope"></i></a>
                <p>info@gmail.com</p>
                <p>sale@gmail.com</p>
              </div>
            </div>

          </div>
          <!--/Second column-->

        </div>

      </section>
      <!--/Section: Contact-->

    </div>
    <!-- /.Second container -->


    <!--Third container-->
    <div class="container-fluid" style="background-color: #c89a69;">
      <div class="row py-3">
        <div class="col-md-12 mt-4 mb-4 text-center d-lg-flex justify-content-center">
          <!--Section heading-->
          <h4 class="white-text wow fadeIn mt-2" data-wow-delay="0.2s">Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h4>
          <div class="bottom-panel">
            <button class="btn btn-outline-white">FREE CONSULATATION</button>
          </div>
        </div>
      </div>
    </div>
    <!--/Third container-->

  </main>
  <!--/Main layout-->

  <!--Footer-->
  <footer class="page-footer footer-tiles text-center text-md-left grey darken-4 mt-0 pt-4">

    <!--Footer Links-->
    <div class="container mb-4">

      <!--First row-->
      <div class="row mt-2">

        <!--First column-->
        <div class="col-xl-4 col-lg-4 pb-1 wow fadeIn" data-wow-delay="0.3s">
          <!--About-->
          <h5 class="title mb-4"><strong>ABOUT OUR SERVICES</strong></h5>

          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
            atque corrupti.</p>

          <p class="mb-1-half"> Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
            molestias excepturi sint.</p>
          <!--/About -->

          <div class="footer-socials">

            <!--Facebook-->
            <a type="button" class="btn-floating btn-primary"><i class="fab fa-facebook-f"></i></a>
            <!--Dribbble-->
            <a type="button" class="btn-floating btn-primary"><i class="fab fa-dribbble"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-primary"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-primary"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->

          </div>
        </div>
        <!--/First column-->

        <hr class="w-100 clearfix d-lg-none">

        <!--Second column-->
        <div class="col-xl-4 col-lg-4 col-md-6 pt-1 pb-1 wow fadeIn" data-wow-delay="0.3s">
          <!--Search-->
          <h5 class="text-uppercase mb-4"><strong>Search something</strong></h5>

          <ul class="footer-search list-unstyled">
            <li>
              <form class="search-form" role="search">
                <div class="md-form waves-light waves-effect waves-light">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </form>
            </li>
          </ul>

          <!--Info-->
          <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!--/Second column-->

        <hr class="w-100 clearfix d-md-none">

        <!--First column-->
        <div class="col-xl-4 col-lg-4 col-md-6 pt-1 pb-1">

          <!--Title-->
          <h5 class="text-uppercase mb-4 wow fadeIn text-center" data-wow-delay="0.3s"><strong>Opening hours</strong></h5>

          <!--Opening hours table-->
          <table class="table wow fadeIn text-white" data-wow-delay="0.3s">
            <tbody>
              <tr>
                <td>Mon - Thu:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8am - 1am</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>

        </div>
        <!--/First column-->

      </div>
      <!--/First row-->

    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
      </div>
    </div>
    <!--/Copyright-->

  </footer>
  <!--/Footer-->

  <!-- Scrollspy -->
  <div class="dotted-scrollspy clearfix d-none d-sm-block">
    <ul class="nav smooth-scroll flex-column">
      <li class="nav-item"><a class="nav-link" href="#home"><span></span></a></li>
      <li class="nav-item"><a class="nav-link" href="#about"><span></span></a></li>
      <li class="nav-item"><a class="nav-link" href="#services"><span></span></a></li>
      <li class="nav-item"><a class="nav-link" href="#lawyers"><span></span></a></li>
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

  <!-- Google Maps -->
  <script src="https://maps.google.com/maps/api/js"></script>

  <script>
    // initialize scrollspy
    $('body').scrollspy({
      target: '.dotted-scrollspy'
    });

    // initialize lightbox
    $(function () {
      $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
    });

    $('.navbar-collapse a').click(function () {
      $(".navbar-collapse").collapse('hide');
    });

    /* WOW.js init */
    new WOW().init();

  </script>