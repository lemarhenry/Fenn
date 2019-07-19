@extends('layouts.guest')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0 py-0">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 h-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                            alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg"
                            alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg"
                            alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-12 pt-2">
            @include('components/testimonial')
        </div>
    </div>

    <div class="row " style="justify-content:center">
            <h2 class="h1-responsive font-weight-bold my-5" >"What Can We Do For You"</h2>
        <div class="col-12">

            <!-- Card deck -->
            <div class="card-deck">

                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="#"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Products we sell</h4>
                        <!--Text-->
                        <p class="card-text">




                            <li>Computer Systems</li>
                               <li> Laptops</li>
                               <li> Tablet Computers</li>
                               <li>  Accessories</li>
                               <li> Software</li></p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button style="color:white" type="button" class="btn btn-light-blue btn-md">
                                More

                            </button>

                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="#"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Repair & Installation</h4>
                        <!--Text-->
                        <p class="card-text">
                            <li>General PC Repairs</li>
                               <li>In-Home, In-Office</li>
                               <li>Virus Removal</li>
                               <li> Accessories</li>
                               <li>Maintenance</li></p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button"  class="btn btn-light-blue btn-md">
                                <a href="{{route('repair')}}"style="color:white">   More</a>
                         </button>

                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="#"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">Home & Office Security</h4>
                        <!--Text-->
                        <p class="card-text">
                            <li> Security Camera (CCTV)</li>
                               <li> Alarm & Panic Setup</li>
                               <li>Access Control</li>
                               <li>Laptop & PC Security</li>
                               <li>General Security Products</li></p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">

                                <a href="{{route('homeSecurity')}}"style="color:white">   More </a>



                        </button>

                    </div>

                </div>
                <!-- Card -->

            </div>
            <!-- Card deck -->

        </div>



        </div>
        <div class="row">

            <div class="col-12">

                <!-- Card deck -->
                <div class="card-deck">

                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="#"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">Networking and Cabling</h4>
                            <!--Text-->
                            <p class="card-text">
                                <li> Networking Supplies</li>
                                <li>Cables</li>
                                <li> Networking Services</li>
                                <li> Wireless Setup</li>
                                </p>
                                <br>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <button type="button" class="btn btn-light-blue btn-md">
                                <a href="{{route('Networking')}}"style="color:white"> More</a>

                            </button>

                        </div>

                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="#"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">Corporate and Institutions</h4>
                            <!--Text-->
                            <p class="card-text">
                                <li>Technology Procurement</li>
                                <li>Point-Of-Sale Solutions</li>
                                <li>  Wireless Network Development</li>
                                </p>
                                <br>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <button type="button" class="btn btn-light-blue btn-md">


                                <a href="{{route('corporate')}}"style="color:white">More</a></button>

                        </div>

                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="#"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!--Title-->
                            <h4 class="card-title">Website Design and Development</h4>
                            <!--Text-->
                            <p class="card-text">
                               <li> Website Solutions</li>
                               <li>Web applications</li>
                               <li> Software Solutions</li>
                               <li> Intranet & CMS</li>
                               </p>
                               <br>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <button type="button" class="btn btn-light-blue btn-md">

                                <a href="{{route('website')}}"style="color:white">  More </a>

                            </button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Card deck -->




            </div>






        </div>



    </div>
</div>
@endsection
