@extends('layouts.guest') @section('content')

<style>
        html,
		    body,
		    header,
		    .jarallax {
		      height: 100%;
		    }
    </style>

</head>
<body class="grey-skin">

	<!--Navigation & Intro-->
	<header>

		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top scrolling-navbar">
		    <div class="container">
		        <a class="navbar-brand" href="{{route('landing')}}"><img src="{{ url('storage/logo.png') }}" alt="" srcset="" style="width:40%"></a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		            <ul class="navbar-nav mr-auto smooth-scroll">
		                <li class="nav-item">
							<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about" data-offset="90">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services" data-offset="40">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio" data-offset="100">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact" data-offset="100">Contact Us</a>
						</li>
		            </ul>
		            </div>
		    </div>
		</nav>

		<!-- Intro Section -->
		<div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://images.unsplash.com/photo-1521106047354-5a5b85e819ee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1952&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		    <div class="mask rgba-black-strong">
		        <div class="container h-100 d-flex justify-content-center align-items-center">
		            <div class="row smooth-scroll">
		                <div class="col-md-12">
		                    <div class="blue-text text-center">
								<h2 class="display-3 font-weight-bold pb-4 mb-2 wow fadeIn ">FennTech Networking</h2>
								<h3 class="intro-subtext wow fadeIn" data-wow-delay="0.2s">Connecting you to the world</h3>
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
			<section id="about" class="section my-5 pb-4">

				<!-- Section title -->
				<h1 class="section-heading text-center mb-5 mt-5 pt-4 wow fadeIn">About Us</h1>

				<!-- First row -->
				<div class="row wow fadeIn" data-wow-delay="0.2s">

					<!-- Place for photo -->
					<div class="col-lg-4 mb-2">
						<img src="https://images.unsplash.com/photo-1531668383211-64743e924c66?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1904&q=80" alt="My photo" class="img-fluid z-depth-1">
					</div>

					<!-- Text content -->
					<div class="col-lg-8 pb-4">
						<p class="lead">I</p>
						<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque delectus, beatae maxime temporibus maiores quibusdam quasi.</span><span>Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit. Qui expedita sit quo, maxime molestiae.</span></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sapiente, consequuntur dolore praesentium non suscipit minus repudiandae, nesciunt placeat, vel nostrum magni pariatur.</p>
					</div>

				</div>
				<!-- /.First row -->

			</section>
			<!-- /.Section About -->

		</div>
		<!-- /.First container -->

		<!-- streak -->

		<div class="streak streak-photo streak-md" style="background-image:url('https://images.unsplash.com/photo-1517373116369-9bdb8cdc9f62?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
			<div class="flex-center rgba-black-light mask">
				<div class="white-text smooth-scroll">
					<h2 class="h2-responsive mb-5 wow fadeIn">Networking Client Testimonial</h2>
					<div class="text-center">
						</div>
				</div>
			</div>
		</div>

		<!-- /.streak -->


		<!-- Second container -->
		<div class="container">

			<!-- Second section -->
			<section id="services" class="section feature-box">

				<h1 class="section-heading text-center mb-5 mt-5 pt-4 wow fadeIn">Our Networking Services</h1>

				<p class="text-center w-responsive mx-auto wow fadeIn my-5" data-wow-delay="0.2s">At FennTech we offer a range of networking and repairs services to keep your IT infrastructure up and running.</p>

				<!-- First row -->
				<div class="row features-big text-center wow fadeIn" data-wow-delay="0.4s">

					<!--First column-->
					<div class="col-md-4 mb-5">
						<i class="far fa-image cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">PC Repairs</h4>
						<p class="grey-text">Businesses and individuals rely heavily on the use of computers to stay connected in a changing world. When you have downtime, caused by computer crashes and viruses, an expert service is needed immediately. FennTech has the expertise and know-how to get you back on track…fast! Our repair department can handle laptops, desktops; tablet PCs, viruses and most PC issues regardless of simplicity or complexity. Call us for express repairs today! You can call us in for preventative maintenance, company and institutional discounted repairs as well as general computer help. Come in store or email your issues to us and we’ll gladly provide a solution for you.</p>
					</div>
					<!--/First column-->

					<!--Second column-->
					<div class="col-md-4 mb-5">
						<i class="fas fa-network-wired cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Cable Installation</h4>
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
					</div>
					<!--/Second column-->

					<!--Third column-->
					<div class="col-md-4 mb-5">
						<i class="fas fa-shopping-bag cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Laptop and Electronics</h4>
						<p class="grey-text">Not every technician can attest to successfully repairing over 2,500 laptops in the past 2 years. FennTech can. We have researched and tested the most effective methods of getting your laptops and electronic appliances repaired. Our technicians are trained in not just computer repairs but basic to advanced electronics. When you know how things work…you are in a better position to repair them. We know our electronics!</p>
					</div>
					<!--/Third column-->

				</div>
                <!-- /.First row -->

                <!-- Second Row -->
				<div class="row features-big text-center wow fadeIn" data-wow-delay="0.4s">

					<!--First column-->
					<div class="col-md-4 mb-5">
						<i class="far fa-image cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Network Stuff</h4>
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
					</div>
					<!--/First column-->

					<!--Second column-->
					<div class="col-md-4 mb-5">
						<i class="fas fa-users cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Networks</h4>
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
					</div>
					<!--/Second column-->

					<!--Third column-->
					<div class="col-md-4 mb-5">
						<i class="fas fa-shopping-bag cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Networking</h4>
						<p class="grey-text"></p>
					</div>
					<!--/Third column-->

				</div>
				<!-- /.Second Row -->

			</section>
			<!-- /.Second section -->

			<hr class="between-sections">

			<!-- Third section -->
			<section id="portfolio" class="section pb-5">

				<!-- Section title -->
				<h1 class="section-heading text-center mb-5 mt-5 pt-4 wow fadeIn" data-wow-delay="0.2s">Networking Portfolio</h1>

				<!-- Section description -->
				<p class="text-center w-responsive mx-auto wow fadeIn my-5">Here are a few of our networking projects.</p>

				<!-- First row -->
				<div class="row text-center wow fadeIn" data-wow-delay="0.4s">

					<div class="col-md-12">

						<div id="mdb-lightbox-ui"></div>

						<div class="mdb-lightbox no-margin">


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

					</div>

				</div>
				<!-- /.First row -->

			</section>
			<!-- /.Third section -->

			<hr class="between-sections">

			<!-- Contact -->
			<section id="contact" class="section mb-4">

				<!--Section heading-->
				<h1 class="section-heading text-center mb-5 mt-5 pt-4 wow fadeIn">Contact Us</h1>
				<!--Section sescription-->
				<p class="text-center w-responsive mx-auto m-b-5 wow fadeIn" data-wow-delay="0.2s">Need networking solutions for your business? Feel Free to contact us today.</p>

				<div class="row wow fadeIn" data-wow-delay="0.4s">

					<!--First column-->
					<div class="col-md-12 mb-5">
						<form>
							<!--First row-->
							<div class="row">
								<!--First column-->
								<div class="col-md-12">
									<div class="md-form mb-0">
										<div class="md-form mb-0">
											<input type="text" id="form41" class="form-control">
											<label for="form41" class="">Your name</label>
										</div>
									</div>
								</div>

								<!--Second column-->
								<div class="col-md-12">
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
							<div class="row ">
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

						<div class="text-center text-md-left mt-4">
							<a class="btn btn-primary">Send</a>
						</div>
					</div>
					<!--.First column-->


    <!--Streak-->
    {{-- <div class="container-fluid py-0" style="background: #b1bace;">
        <div class="flex-center">
            <ul class="list-unstyled">
                <li><h2 class="h2-responsive white-text mt-4 wow fadeIn" data-wow-delay="0.2s"><i class="fas fa-quote-left" aria-hidden="true"></i> A camera is a tool for learning how to see without a camera. <i class="fas fa-quote-right" aria-hidden="true"></i></h2></li>
                <li><h4 class="font-italic mt-4 white-text wow fadeIn" data-wow-delay="0.4s">~ Dorothea Lange</h4></li>
            </ul>
        </div>
    </div> --}}
    <!--/Streak-->


	</main>
	<!--/Main layout-->

	<!-- Scrollspy -->
	<div class="dotted-scrollspy clearfix d-none d-sm-block">
		<ul class="nav smooth-scroll flex-column">
			<li class="nav-item"><a class="nav-link" href="#home"><span></span></a></li>
			<li class="nav-item"><a class="nav-link" href="#about"><span></span></a></li>
			<li class="nav-item"><a class="nav-link" href="#services"><span></span></a></li>
			<li class="nav-item"><a class="nav-link" href="#portfolio"><span></span></a></li>
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

		$('#collapseEx a').click(function(e) {
			$('#collapseEx').collapse('hide');
		});

		/* WOW.js init */
		new WOW().init();

		$('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });

	</script>



