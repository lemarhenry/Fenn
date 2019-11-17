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
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
		    <div class="container">
		        <a class="navbar-brand" href="#">Navbar</a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		            <ul class="navbar-nav mr-auto smooth-scroll">
		                <li class="nav-item">
							<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about" data-offset="90">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services" data-offset="40">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio" data-offset="100">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact" data-offset="100">Contact</a>
						</li>
		            </ul>
		            <!-- Social Icon  -->
		            <ul class="navbar-nav nav-flex-icons">
		                <li class="nav-item">
		                    <a class="nav-link"><i class="fab fa-facebook-f light-green-text-2"></i></a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link"><i class="fab fa-twitter light-green-text-2"></i></a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link"><i class="fab fa-instagram light-green-text-2"></i></a>
		                </li>
		            </ul>
		        </div>
		    </div>
		</nav>

		<!-- Intro Section -->
		<div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/People/full page/img%20(26).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		    <div class="mask rgba-black-strong">
		        <div class="container h-100 d-flex justify-content-center align-items-center">
		            <div class="row smooth-scroll">
		                <div class="col-md-12">
		                    <div class="white-text text-center">
								<h2 class="display-3 font-weight-bold pb-4 mb-2 wow fadeIn">Jonathan Doe</h2>
								<h3 class="intro-subtext wow fadeIn" data-wow-delay="0.2s">Professional photographer</h3>
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
				<h1 class="section-heading text-center mb-5 mt-5 pt-4 wow fadeIn">Who am I?</h1>

				<!-- First row -->
				<div class="row wow fadeIn" data-wow-delay="0.2s">

					<!-- Place for photo -->
					<div class="col-lg-4 mb-2">
						<img src="https://mdbootstrap.com/img/Photos/Horizontal/Photography/4-col/img%20(4).jpg" alt="My photo" class="img-fluid z-depth-1">
					</div>

					<!-- Text content -->
					<div class="col-lg-8 pb-4">
						<p class="lead">I'm a photographer with 8+ years of experience, based in San Francisco</p>
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

		<div class="streak streak-photo streak-md" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(120).jpg')">
			<div class="flex-center rgba-black-light mask">
				<div class="white-text smooth-scroll">
					<h2 class="h2-responsive mb-5 wow fadeIn">Random amazing text</h2>
					<div class="text-center">
						<a href="#contact" class="btn btn-outline-white wow fadeIn" data-offset="100" data-wow-delay="0.2s">Button</a>
					</div>
				</div>
			</div>
		</div>

		<!-- /.streak -->


		<!-- Second container -->
		<div class="container">

			<!-- Second section -->
			<section id="services" class="section feature-box">

				<h1 class="section-heading text-center mb-5 mt-5 pt-4 wow fadeIn">What I do?</h1>

				<p class="text-center w-responsive mx-auto wow fadeIn my-5" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet maiores aspernatur aut animi debitis. Ad excepturi dolor tempora at aperiam earum veritatis ullam. Culpa tempora possimus necessitatibus excepturi, quisquam officia.</p>

				<!-- First row -->
				<div class="row features-big text-center wow fadeIn" data-wow-delay="0.4s">

					<!--First column-->
					<div class="col-md-4 mb-5">
						<i class="far fa-image cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Portraits</h4>
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
					</div>
					<!--/First column-->

					<!--Second column-->
					<div class="col-md-4 mb-5">
						<i class="fas fa-users cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Group photos</h4>
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
					</div>
					<!--/Second column-->

					<!--Third column-->
					<div class="col-md-4 mb-5">
						<i class="fas fa-shopping-bag cyan-text fa-3x mb-4"></i>
						<h4 class="font-weight-bold mb-4">Products photos</h4>
						<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
					</div>
					<!--/Third column-->

				</div>
				<!-- /.First row -->

			</section>
			<!-- /.Second section -->

			<hr class="between-sections">

			<!-- Third section -->
			<section id="portfolio" class="section pb-5">

				<!-- Section title -->
				<h1 class="section-heading text-center mb-5 mt-5 pt-4 wow fadeIn" data-wow-delay="0.2s">What I did?</h1>

				<!-- Section description -->
				<p class="text-center w-responsive mx-auto wow fadeIn my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia iste provident, voluptatum voluptatibus aut modi aspernatur autem impedit, eius, debitis earum voluptatem. Quaerat hic aspernatur laborum magni earum. At, officiis!</p>

				<!-- First row -->
				<div class="row text-center wow fadeIn" data-wow-delay="0.4s">

					<div class="col-md-12">

						<div id="mdb-lightbox-ui"></div>

						<div class="mdb-lightbox no-margin">

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(112).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(112).jpg" class="img-fluid">
								</a>
							</figure>

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(111).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(111).jpg" class="img-fluid" />
								</a>
							</figure>

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(115).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(115).jpg" class="img-fluid" />
								</a>
							</figure>

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(113).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(113).jpg" class="img-fluid" />
								</a>
							</figure>

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(7).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(7).jpg" class="img-fluid" />
								</a>
							</figure>

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(114).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(114).jpg" class="img-fluid" />
								</a>
							</figure>

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(110).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(110).jpg" class="img-fluid" />
								</a>
							</figure>

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(103).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(103).jpg" class="img-fluid" />
								</a>
							</figure>

							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(108).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(108).jpg" class="img-fluid" />
								</a>
							</figure>
							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(109).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(109).jpg" class="img-fluid" />
								</a>
							</figure>
							<figure class="col-md-3">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(107).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(107).jpg" class="img-fluid" />
								</a>
							</figure>

							<figure class="col-md-3 mb-4">
								<a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(89).jpg" data-size="1600x1067">
									<img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(89).jpg" class="img-fluid" />
								</a>
							</figure>

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
				<h1 class="section-heading text-center mb-5 mt-5 pt-4 wow fadeIn">Contact me</h1>
				<!--Section sescription-->
				<p class="text-center w-responsive mx-auto m-b-5 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

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

						<div class="text-center text-md-left mt-4">
							<a class="btn btn-primary">Send</a>
						</div>
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
		<!-- /.Second container -->


    <!--Streak-->
    <div class="container-fluid py-5" style="background: #b1bace;">
        <div class="flex-center">
            <ul class="list-unstyled">
                <li><h2 class="h2-responsive white-text mt-4 wow fadeIn" data-wow-delay="0.2s"><i class="fas fa-quote-left" aria-hidden="true"></i> A camera is a tool for learning how to see without a camera. <i class="fas fa-quote-right" aria-hidden="true"></i></h2></li>
                <li><h4 class="font-italic mt-4 white-text wow fadeIn" data-wow-delay="0.4s">~ Dorothea Lange</h4></li>
            </ul>
        </div>
    </div>
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
    


