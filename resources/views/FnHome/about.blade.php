@extends('layouts.guest') @section('content')

<div class="container-fluid py-0">
    <section class="view p-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="view">
                    <img
                        src="{{ url('storage/images/aboutpage.jpg') }}"
                        class="img-fluid rounded "
                        alt="smaple image"
                    />
                    <div class="mask flex-center hm-gradient"></div>
                </div>
            </div>
            <div class="col-lg-6 card-body">
                <div
                    class="d-flex flex-column justify-content-center align-items-center"
                >
                    <h1 class="heading display-4">About Us</h1>
                    <h4 class="subheading font-weight" id="aboutheadertext">
                        FennTech Ltd is an IT solutions provider with over 14
                        years experience in crafting solutions for home, office,
                        schools and government. The company was founded on the
                        premiss that you don’t just need a computer, nor a fax
                        machine, but a solution for all your technology needs.
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
    <br />
    <<<<<<< HEAD
    <hr class="my-3" />
    <br />
    <div class="row container-fluid pb-4">
        <div class="col-lg-12 col-md-6 card-body" id="section">
            <h5 class="dark"><b>Our Solution include:</b></h5>
            =======
            <hr class="my-3" />
            <br />
            <div class="row container-fluid pb-4">
                <div class="col-lg-12 col-md-6 card" id="section">
                    <h5 class="dark"><b>Our Solution include:</b></h5>
                    >>>>>>> 3b0d2f27ab3ee9d04a7056c7435d04b1bfedc579
                    <ul class="list-unstyled">
                        <ul class="pb-2">
                            <li>
                                Procurement of Computers and Laptop systems of
                                all brands, makes and models.
                            </li>
                            <li>
                                Component level repairs and diagnostics to
                                laptops, LCD screens, multimedia projects,
                                digital cameras and other electronics
                            </li>
                            <li>
                                CCTV Installation, maintenance and consultancy
                                (Security Cameras)
                            </li>
                            <li>
                                Wireless and Wired network design and
                                implementation (including fiber optics &
                                structured cabling)
                            </li>
                            <li>
                                Access control and Security systems (including
                                fire alarms)
                            </li>
                            <li>
                                Construction-level technology infrastructure
                                design and implementation
                            </li>
                            <li>
                                Software engineering including website
                                development, mobile apps etc
                            </li>
                            <li>
                                Custom remote monitoring and control of various
                                tasks
                            </li>
                            <li>Custom IT solutions</li>
                        </ul>

                        <<<<<<< HEAD
                        <h5 class="dark">
                            <b>Our respected list of clients include:</b>
                        </h5>
                        =======
                        <h5 class="dark">
                            <b>Our respected list of clients include:</b>
                        </h5>
                        >>>>>>> 3b0d2f27ab3ee9d04a7056c7435d04b1bfedc579

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
    </div>
</div>
