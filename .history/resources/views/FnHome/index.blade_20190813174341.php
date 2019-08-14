@extends('layouts.guest') @section('content')
<style>
    li {
        list-style: none;
        text-align: center;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 p-2">
            @include('components.carousel')
            @include('components/testimonial')
        </div>
    </div>

    <div class="row p-5 justify-content-center ">
        <h2 class="h1-responsive font-weight-bold my-5">
            "What Can We Do For You"
        </h2>
        <div class="col-12">
            <!-- Card deck -->
            <div class=" card-deck ">
                <!-- Card -->
                <div
                    class="card mb-4  align-items-center d-flex justify-content-center"
                >
                    <!--Card image-->
                    <div class="view overlay p-5 d-flex justify-content-center">
                        <img
                            style="width:50%;"
                            class="card-img-top"
                            src="{{ url('storage/images/shoppingcart.png') }}"
                            alt=" image cap"
                        />
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body ">
                        <!--Title-->
                        <h4 class="card-title">Products we sell</h4>
                        <!--Text-->
                        <p class="card-text">
                            <li>Computer Systems</li>
                            <li>Lapops</li>
                            <li>Tablet Computers</li>
                            <li>Accessories</li>
                            <li>Software</li>
                        </p>
                        <div class="text-center">
                            <button
                                style="color:white"
                                type="button"
                                class="btn btn-light-blue btn-md "
                            >
                                <a
                                    href="http://buy.fenntechltd.com/"
                                    style="color:white"
                                >
                                    More
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div
                    class="card mb-4  align-items-center d-flex justify-content-center"
                >
                    <!--Card image-->
                    <div class="view overlay p-5 d-flex justify-content-center">
                        <img
                            class="card-img-top"
                            src="{{ url('storage/images/Repair.jpg') }}"
                            style="width:50%"
                            alt="Card image cap"
                        />
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
                            <li>Accessories</li>
                            <li>Maintenance</li>
                        </p>
                        <div class="text-center">
                            <button
                                type="button"
                                class="btn btn-light-blue btn-md"
                            >
                                <a
                                    href="{{ route('repair') }}"
                                    style="color:white"
                                >
                                    More</a
                                >
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div
                    class="card mb-4  align-items-center d-flex justify-content-center"
                >
                    <!--Card image-->
                    <div class="view overlay p-5 d-flex justify-content-center">
                        <img
                            class="card-img-top"
                            src="{{ url('storage/images/security.jpg') }}"
                            style="width:50%"
                            alt="Card image cap"
                        />
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
                            <li>Security Camera (CCTV)</li>
                            <li>Alarm & Panic Setup</li>
                            <li>Access Control</li>
                            <li>Lapop & PC Security</li>
                            <li>General Security Products</li>
                        </p>
                        <div class="text-center">
                            <!-- buttons -->
                            <button
                                type="button"
                                class="btn btn-light-blue btn-md"
                            >
                                <a
                                    href="{{ route('homeSecurity') }}"
                                    style="color:white"
                                >
                                    More
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <!-- Card deck -->
        </div>

    <div class=" row ">
        <div class="col-12  ">
            <!-- Card deck -->
            <div class="card-deck ">
                <!-- Card -->
                <div class="card mb-4  align-items-center d-flex justify-content-center">
                    <!--Card image-->
                    <div class="view overlay p-5 d-flex justify-content-center" >
                        <img

                            src="{{ url('storage/images/illustrationforcabling.jpg') }}"
                            style="width:35%"
                            alt="Card image cap"
                        />
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Networking & Cabling</h4>
                        <!--Text-->
                        <p class="card-text">
                            <li>Networking Supplies</li>
                            <li>Cables</li>
                            <li>Networking Services</li>
                            <li>Wireless Setup</li>


                        </p>
                        <br />
                        <!-- buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">
                            <a
                                href="{{ route('networking') }}"
                                style="color:white"
                            >
                                More</a
                            >
                        </button>
                    </div>
                </div>
                <!-- Card -->
        <div class=" row ">
            <div class="col-12  ">
                <!-- Card deck -->
                <div class="card-deck ">
                    <!-- Card -->
                    <div
                        class="card mb-4  align-items-center d-flex justify-content-center"
                    >
                        <!--Card image-->
                        <div
                            class="view overlay p-5 d-flex justify-content-center"
                        >
                            <img
                                src="{{
                                    url(
                                        'storage/images/illustrationforcabling.jpg'
                                    )
                                }}"
                                style="width:35%"
                                alt="Card image cap"
                            />
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
                                <li>Networking Supplies</li>
                                <li>Cables</li>
                                <li>Networking Services</li>
                                <li>Wireless Setup</li>
                            </p>
                            <br />
                            <div class="text-center">
                                <button
                                    type="button"
                                    class="btn btn-light-blue btn-md"
                                >
                                    <a
                                        href="{{ route('networking') }}"
                                        style="color:white"
                                    >
                                        More</a
                                    >
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->


                    <!-- Card -->
                    <div
                        class="card mb-4  align-items-center d-flex justify-content-center"
                    >
                        <!--Card image-->
                        <div
                            class="view overlay p-5 d-flex justify-content-center "
                        >
                            <img
                                class="card-img-top"
                                src="{{ url('storage/images/corpporate.jpg') }}"
                                style="width:50%"
                                alt="Card image cap"
                            />
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">
                                Corporate and Institutions
                            </h4>
                            <!--Text-->
                            <p class="card-text">
                                <li>Technology Procurement</li>
                                <li>Point-Of-Sale Solutions</li>
                                <li>Wireless Network Development</li>
                            </p>
                            <br />
                            <div class="text-center">
                                <button
                                    type="button"
                                    class="btn btn-light-blue btn-md"
                                >
                                    <a
                                        href="{{ route('corporate') }}"
                                        style="color:white"
                                        >More</a
                                    >
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">
                            Website Design & Development
                        </h4>
                        <!--Text-->
                        <p class="card-text">
                            <li>Website Solutions</li>
                            <li>Web applications</li>
                            <li>Software Solutions</li>
                            <li>Intranet & CMS</li>
                        </p>
                        <br />
                        <!-- buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">
                            <a
                                href="{{ route('website') }}"
                                style="color:white"
                            >
                                More
                    <!-- Card -->
                    <div
                        class="card mb-4  align-items-center d-flex justify-content-center"
                    >
                        <!--Card image-->
                        <div
                            class="view overlay p-5 d-flex justify-content-center "
                        >
                            <img
                                class="card-img-center"
                                style="width:45%"
                                src="{{ url('storage/images/web3.jpg') }}"
                                alt="Card image cap"
                            />
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">
                                Website Design and Development
                            </h4>
                            <!--Text-->
                            <p class="card-text">
                                <li>Website Solutions</li>
                                <li>Web applications</li>
                                <li>Software Solutions</li>
                                <li>Intranet & CMS</li>
                            </p>
                            <br />
                            <div class="text-center">
                                <button
                                    type="button"
                                    class="btn btn-light-blue btn-md"
                                >
                                    <a
                                        href="{{ route('website') }}"
                                        style="color:white"
                                    >
                                        More
                                    </a>
                                </button>
                            </div>
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
