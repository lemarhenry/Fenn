@extends('layouts.guest')
@section('content')

<div class="container-fluid py-0">
            <section class="view p-5">
                <div class="row ">
                        <div class="col-md-6">
                                <div class="view ">
                                    <img
                                        src="{{ url('storage/images/security.jpg') }}"
                                        class="img-fluid rounded"
                                        alt="smaple image"
                                    />
                                    <div class="mask flex-center hm-gradient"></div>
                                </div>
                            </div>
                    <div class="col-md-6 card">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center ">

                            <h1 class="heading display-4">
                                Home & Office Security
                            </h1>
                            <h4 class="subheading font-weight">
                                Home & Office security is an issue for every business and home owners alike, no matter the size. To find out what is best for his or
                                her business or home, please see our list of available features.

                                <div class=" mr-auto">
                               <a href="#section"> <button
                                    type="button"
                                    class="btn btn-lily btn-margin btn-rounded text-white ">
                                    Features
                                    <i class="fas fa-caret-right ml-3"></i>

                                </button></a>
                            </div>
                            </h4>

                        </div>
                    </div>


                </div>
            </section>
            <!-- Intro -->

    <div class="row container-fluid">
        <div class="col-12 px-0 py-0">
            @include('components.testimonial')
        </div>
    </div>


 <section id="section" class="my-5">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5">Features</h2>
                <!-- Section description -->
                <h4 class="text-center w-responsive mx-auto mb-2">Security Camera (CCTV)</h4>
                <p class="grey-text text-center w-responsive mx-auto mb-5">
                    Getting additional “eyes” might be the key to taking your business to the next level or just for
                    providing comfort in knowing what takes place.</p>

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-5 mb-lg-0 mb-5 ">
                    <!--Image-->
                    <img src="{{url('storage/images/camera.png')}}"  style="50%" alt="some image" class="img-fluid rounded z-depth-1">
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-7">

                    <div class="card">
                        <div class="card-body ">
                          <h5 class="card-title">Why get security cameras?</h5>
                          <p class="card-text">
                           <li>To deter and detect criminal activity</li>
                           <li> To identify suspects</li>
                           <li>To gather evidence</li>
                           <li>To gather intelligence on suspects</li>
                           <li>To aid in prosecutions</li>
                           <li>To monitor anti-social behaviour and acts or events which endanger the public and Employees’ health and safety</li>
                           <li>To assist the emergency services</li> </p>

                        </div>
                      </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <hr class="my-5">
<!-- Section description -->
<h4 class="text-center w-responsive mx-auto mb-2">Alarm & Panic Setup</h4>
<p class="grey-text text-center w-responsive mx-auto mb-5">
        Securing your premises is no longer a far fetched option. We will provide affordable
         and efficient service that can be connected to security companies or self-monitored.</p>
                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-7">

                        <div class="card">
                                <div class="card-body ">
                                  <h5 class="card-title">Our alarm systems features</h5>
                                  <p class="card-text">
                                   <li>Alarms and sirens (to deter thieves before they enter)</li>
                                   <li> Glass break detection (detects loud noises like the shattering of windows)</li>
                                   <li>Vibration sensors (detects vibration and sets off the alarm)</li>
                                   <li>Motion sensors (detects motions and sets off the alarm)</li>
                                   <li>Keypad(s) to arm/disarm the system</li>
                                </div>
                              </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-5 mb-lg-0  ">
                    <!--Image-->
                    <img src="{{url('storage/images/alarm.jpg')}}" alt="some image" class="img-fluid rounded z-depth-1">
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->
                <hr class="my-5">
<h4 class="text-center w-responsive mx-auto mb-2">Access Control Systems</h4>
<p class="grey-text text-center w-responsive mx-auto mb-5">
        Deciding who enters where can significantly improve
        the security in your building. </p>

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-5 mb-lg-0 mb-5">
    <!--Image-->
    <img src="{{url('storage/images/accessCon.png')}}" alt="some image" style="width:50%" class="img-fluid rounded z-depth-1">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-7">

    <div class="card">
        <div class="card-body ">
          <h5 class="card-title">Access can be granted with:</h5>
          <p class="card-text">
           <li>Passwords/Keypads</li>
           <li>Swipe cards</li>
           <li>To gather evidence</li>
           <li>Biometric finger scan</li>
           <li>Motion sensors</li>
           <li>Keyring buttons</li>
           <li>Retina scan and more.</li> </p>

        </div>
      </div>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<hr class="my-5">
<!-- Section description -->
<h4 class="text-center w-responsive mx-auto mb-2">Biometric Time Clocks</h4>
<p class="grey-text text-center w-responsive mx-auto mb-5">

        Time attendance is crucial to the survival of your business. Reduce paper waste and improve on accuracy
        by installing a biometric time clock today. No more punching in or someone asking a friend to sign them in.
        </p>
                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-7">

                        <div class="card">
                                <div class="card-body ">
                                  <h5 class="card-title">Our Biometric systems features</h5>
                                  <p class="card-text">
                                    <li> provides you with advanced methods to easily collect track and manage employee time
                                        and attendance.</li>
                                       <Li> Biometric time clocks are the most eﬀective method to collect employee time</Li>
                                    <li> eliminates “buddy punching” the
                                        practice of one worker clocking in out for another.</li>
                                      <li>Choose from basic to advanced ﬁngerprint technologies.</li>
                                  </p>
                                </div>
                              </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-5">
                    <!--Image-->
                    <img src="{{url('storage/images/biometric.jpg')}}" alt="some image" class="img-fluid rounded z-depth-1">
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->
                <hr class="my-5">
                <h4 class="text-center w-responsive mx-auto mb-2">Automatic Gates, Garage Doors</h4>
                <p class="grey-text text-center w-responsive mx-auto mb-5">
                        Continuing on your security, we can install and maintain your garage doors, automatic gates and shutters.
                        With a team with over 20 years of experience, we are ready,
                        willing and able to perform these installations to industry standards. </p>

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-5 mb-lg-0 mb-5">
                    <!--Image-->
                    <img src="{{url('storage/images/autoDoor.jpg')}}" alt="some image" class="img-fluid rounded z-depth-1">
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-7">

                    <div class="card">
                        <div class="card-body ">
                          <h5 class="card-title">Includes:</h5>
                          <p class="card-text">
                           <li> motorized device that opens and closes garage doors</li>
                           <li>motorized device that opens and closes gates</li>
                           <li>Remote Control Gate/Garage Opener </li>
                           <li>Installation</li>
                           <li>Maintenance</li>
                            </p>

                        </div>
                      </div>

                  </div>
                </div>
                  <!-- Grid column -->
                  <hr class="my-5">
                  <!-- Section description -->
                  <h4 class="text-center w-responsive mx-auto mb-2">Fire Alarms</h4>
                  <p class="grey-text text-center w-responsive mx-auto mb-5">

                    FennTech is able to supply and install your fire alarm systems according to the fire code in your region.
                     Be sure you are up to date by getting a quote today.
                          </p>
                                  <!-- Grid row -->
                                  <div class="row">

                                    <!-- Grid column -->
                                    <div class="col-lg-7">

                                          <div class="card">
                                                  <div class="card-body ">
                                                    <h5 class="card-title">Fire alarms are necessary for all places that intend to accomodate life:</h5>
                                                    <p class="card-text">
                                                      <li> Home</li>
                                                         <Li> offices</Li>
                                                      <li> Factories</li>
                                                        <li> Day Cares</li>
                                                        <li>School</li>
                                                       <li>Etc.</li>
                                                    </p>
                                                  </div>
                                                </div>

                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-lg-5">
                                      <!--Image-->
                                      <img src="{{url('storage/images/firealarm.png')}}" alt="some image" class="img-fluid rounded z-depth-1">
                                    </div>
                                    <!-- Grid column -->

                                  </div>
                                  <!-- Grid row -->
</section>
    </div>
@endsection
