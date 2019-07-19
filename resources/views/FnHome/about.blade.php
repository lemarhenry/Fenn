@extends('layouts.guest') @section('content')

<div class="container-fluid py-0">
    <div class="row">
        <div class="col-12  px-0 py-0">
            <section class="view">
                <div class="row">

                        <div class="col-md-6">
                                <div class="view">
                                    <img
                                        src="{{ url('storage/images/aboutpage.jpg') }}"
                                        class="img-fluid rounded"
                                        alt="smaple image"
                                    />
                                    <div class="mask flex-center hm-gradient"></div>
                                </div>
                            </div>
                    <div class="col-md-6">
                        <div
                            class="d-flex flex-column justify-content-center align-items-center h-100 pt-5"
                        >

                            <h1 class="heading display-4">About Us</h1>
                            <h4 class="subheading font-weight">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Fugit, error amet numquam iure
                                provident voluptate esse quasi, veritatis totam
                                voluptas nostrum quisquam eum porro a pariatur
                                veniam.
                            </h4>
                            <div class="mr-auto">
                                <button
                                    type="button"
                                    class="btn btn-lily btn-margin btn-rounded text-white"
                                >
                                    More Info
                                    <i class="fas fa-caret-right ml-3"></i>
                                    <a href="#section"></a>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Intro -->
        </div>
    </div>
    <div class="row container-fluid">
        <div class="col-12 px-0 py-0">
            @include('components.testimonial')
        </div>
    </div>
    <br />
    <hr class="style18" />
    <br />
    <div class="row container-fluid">
        <div class="col-lg-12 col-md-6" id="section">
            <h5 class="dark"><b>Our Solution include:</b> </h5>
            <ul class="list-unstyled">
                <ul class="pb-2">
                    <li>
                        Procurement of Computers and Laptop systems of all
                        brands, makes and models.
                    </li>
                    <li>
                        Component level repairs and diagnostics to laptops, LCD
                        screens, multimedia projects, digital cameras and other
                        electronics
                    </li>
                    <li>
                        CCTV Installation, maintenance and consultancy (Security
                        Cameras)
                    </li>
                    <li>
                        Wireless and Wired network design and implementation
                        (including fiber optics & structured cabling)
                    </li>
                    <li>
                        Access control and Security systems (including fire
                        alarms)
                    </li>
                    <li>
                        Construction-level technology infrastructure design and
                        implementation
                    </li>
                    <li>
                        Software engineering including website development,
                        mobile apps etc
                    </li>
                    <li>
                        Custom remote monitoring and control of various tasks
                    </li>
                    <li>Custom IT solutions</li>
                </ul>

                <h5 class="dark"><b>Our respected list of clients include:</b> </h5>

                <ul class="pb-2">
                    <li>Juici Patties (HQ and stores)</li>
                    <li>Northern Caribbean University</li>
                    <li>
                        The National PC Bank (with 32 branches and HQ in
                        Mandeville)
                    </li>
                    <li>CVM TV</li>
                    <li>Noble WiFi LTD</li>
                    <li>CY Clothing (Cooyah brand)</li>
                    <li>Three Angels Pharmacy</li>
                    <li>Kings Chemical Company</li>
                    <li>Willowdene Group of Schools</li>
                    <li>Aabuthnott Galimore High School</li>
                    <li>Southern Regional Health Authority (Gov’t)</li>
                </ul>
            </ul>
        </div>
    </div>
</div>

@endsection
