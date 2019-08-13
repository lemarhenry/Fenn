@extends('layouts.guest') @section('content')

<div class="container-fluid ">

            <section class="view p-5">
                <div class="row">

                        <div class="col-md-6">
                                <div class="view">
                                    <img
                                        src="{{ url('storage/images/repair.jpg') }}"
                                        class="img-fluid rounded"
                                        style="width:100%"
                                        alt="smaple image"/>
                                    <div class="mask flex-center hm-gradient"></div>
                                </div>
                            </div>
                    <div class="col-md-6 card">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center "
                        >

                            <h1 class="heading display-4">Repair and Installations</h1>
                            <h4 class="subheading font-weight">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Fugit, error amet numquam iure
                                provident voluptate esse quasi, veritatis totam
                                voluptas nostrum quisquam eum porro a pariatur
                                veniam.
                                <div class="mr-auto">
                                 <a href="#section"><button
                                    type="button"
                                    class="btn btn-lily btn-margin btn-rounded text-white">
                                    More Info
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
    <h4 class="text-center w-responsive mx-auto mb-2">General Pc Repairs</h4>
    <p class="grey-text text-center w-responsive mx-auto mb-5">
        Businesses and individuals rely heavily on the use of computers to stay connected in a changing world.
         When you have downtime, caused by computer crashes and viruses, an expert service is needed immediately.</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 mb-5">
        <!--Image-->
        <img src="#" alt="some image" class="img-fluid rounded z-depth-1">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7">

        <div class="card">
            <div class="card-body ">
              <h5 class="card-title">How We Do It?</h5>
              <p class="card-text">
                FennTech has the expertise and know-how to get you back on track…fast! Our repair department can handle laptops, desktops; tablet PCs, viruses and most
                PC issues regardless of simplicity or complexity. Call us for express repairs today! You can call us in for preventative maintenance,
                company and institutional discounted repairs as well as general computer help.
                Come in store or email your issues to us and we’ll gladly provide a solution for you. </p>

            </div>
          </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">
<!-- Section description -->
<h4 class="text-center w-responsive mx-auto mb-2">Laptop & Electronics</h4>
<p class="grey-text text-center w-responsive mx-auto mb-5">
    Not every technician can attest to successfully repairing over 2,500 laptops in the past 2 years.</p>
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-7">

            <div class="card">
                    <div class="card-body ">
                      <h5 class="card-title">Get Your Assurance</h5>
                      <p class="card-text">
                        FennTech can. We have researched and tested the most effective methods of getting your laptops and electronic appliances repaired. Our technicians are trained in not just computer repairs but basic to advanced electronics. When you know how things work…you are in a better position to repair them. We know our electronics!

                        Our customers have come to know of our technical aptitude over the
                        years with laptops, digital cameras, tablet PCS, LCD Monitors etc.
                        We offer component level diagnostics for a minimal charge.
                        Come on in and let us get you back up…fast! Ask about our special
                         order facility. We will get your motherboards, chips and other
                        parts to repair your technology. Not just “You will have to
                        replace your motherboard” like most store in Jamaica.
                         We will fix it for less.</li>
                    </div>
                  </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-5">
        <!--Image-->
        <img src="#" alt="some image" class="img-fluid rounded z-depth-1">
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    <hr class="my-5">
<h4 class="text-center w-responsive mx-auto mb-2">In-Home, In-Office</h4>
<p class="grey-text text-center w-responsive mx-auto mb-5">
    Not feeling like disconnecting and taking your PC to the shop? </p>

<!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-lg-5 mb-lg-0 mb-5">
<!--Image-->
<img src="#" alt="some image" class="img-fluid rounded z-depth-1">
</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-7">

<div class="card">
<div class="card-body ">
<h5 class="card-title">We'll Come To You</h5>
<p class="card-text">
    We’ll come get it for you. We will not proclaim to be the cheapest in town, but we certainly are the best.
    Try us out for yourself. </p>

</div>
</div>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<hr class="my-5">
<!-- Section description -->
<h4 class="text-center w-responsive mx-auto mb-2">Virus Removal</h4>
<p class="grey-text text-center w-responsive mx-auto mb-5">

    Viruses slow you down. They make computing a real pain. There are new viruses on the internet everyday.
</p>
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-7">

            <div class="card">
                    <div class="card-body ">
                      <h5 class="card-title">We Get Rid Of Them</h5>
                      <p class="card-text">
                        You must protect your computer with anti-virus software that gets updated regularly.
                        We will setup a plan for you that includes 4 major check points:
                      </p>
                    </div>
                  </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-5">
        <!--Image-->
        <img src="#" alt="some image" class="img-fluid rounded z-depth-1">
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    <hr class="my-5">
    <h4 class="text-center w-responsive mx-auto mb-2">Removal and Cleanup</h4>
    <p class="grey-text text-center w-responsive mx-auto mb-5">
        Apart from viruses having a lot Junk on your machine can also induce slow and groggy
        movement, So get your clean up here at Fenntech and get your machine feeling like brand new.
    </p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 mb-5">
        <!--Image-->
        <img src="#" alt="some image" class="img-fluid rounded z-depth-1">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7">

        <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Includes:</h5>
              <p class="card-text">
               <li> protect your entire system</li>
               <li>gets regularly updated</li>
               <li>offer you support  </li>
               <li>warranty on this service</li>
                </p>

            </div>
          </div>

      </div>
    </div>

</section>

</div>

@endsection
