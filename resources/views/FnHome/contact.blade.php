@extends('layouts.guest')
@section('content')
<div class="container-fluid">

<section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto pb-2">Please fill out the below contact form and we will get back to you as soon as possible.</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-5 mb-lg-0 mb-4">

            <!-- Form with header -->
            <div class="card">
                <div class="card-header blue accent-1 text-white">
                        <div class="form-header ">
                                <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
                         </div>
                </div>
              <div class="card-body">
                <!-- Header -->

                <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
                <!-- Body -->
                <div class="md-form">
                  <i class="fas fa-user prefix grey-text"></i>
                  <input type="text" id="form-name" class="form-control">
                  <label for="form-name">Your name</label>
                </div>
                <div class="md-form">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input type="text" id="form-email" class="form-control">
                  <label for="form-email">Your email</label>
                </div>
                <div class="md-form">
                  <i class="fas fa-tag prefix grey-text"></i>
                  <input type="text" id="form-Subject" class="form-control">
                  <label for="form-Subject">Subject</label>
                </div>
                <div class="md-form">
                  <i class="fas fa-pencil-alt prefix grey-text"></i>
                  <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                  <label for="form-text">Send message</label>
                </div>
                <div class="text-center">
                  <button class="btn btn-light-blue">Submit</button>
                </div>
              </div>
            </div>
            <!-- Form with header -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-7">
                <div class="view">
                        <img src="{{ url('storage/images/contact.jpg') }}"  class="img-fluid rounded" alt="smaple image">
                        <div class="mask flex-center hm-gradient">
                        </div>
                      </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>

      <div class="row">
            <div class="col-lg-12">
            <!--Google map-->
            <div id="map-container-google-2" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.7010773439033!2d-77.51254478549363!3d18.039071087691113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edbbe358ac8c7fd%3A0xdacc57f21b077437!2sFennTech!5e0!3m2!1sen!2sjm!4v1563382890091!5m2!1sen!2sjm" frameborder="0"

                      style="border:0" allowfullscreen></iframe>
                  </div>
                  <!-- Buttons-->
                  <div class="row text-center pb-2">
                    <div class="col-md-4">
                      <a class="btn-floating blue accent-1">
                        <i class="fas fa-map-marker-alt"></i>
                      </a>
                      <p>Shop #13, Juici Plaza, Mandeville, Manchester </p>
                      <p class="mb-md-0">Jamaica W.I.</p>
                    </div>
                    <div class="col-md-4">
                      <a class="btn-floating blue accent-1">
                        <i class="fas fa-phone"></i>
                      </a>
                      <p>+1876-619-8324</p>
                      <p class="mb-md-0">Mon - Sat, 9:00-5:00</p>
                    </div>
                    <div class="col-md-4">
                      <a class="btn-floating blue accent-1">
                        <i class="fas fa-envelope"></i>
                      </a>
                      <p> info@fenntechltd.com</p>

                    </div>
                  </div>

            </div>
      </div>
    </div>
@endsection
