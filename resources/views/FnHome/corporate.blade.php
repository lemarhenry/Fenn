@extends('layouts.guest')
@section('content')
<main>

    <div class="container-fluid py-0">


            <section class="view p-5">

                    <div class="row">
                            <div class="col-md-6">

                                    <div class="view">
                                      <img src="{{ url('storage/images/corpporate.jpg') }}" style="height:435px;width:870px" class="img-fluid rounded" alt="smaple image">
                                      <div class="mask flex-center hm-gradient">
                                      </div>
                                    </div>

                                  </div>
                      <div class="col-md-6 card">

                        <div class="d-flex flex-column justify-content-center align-items-center h-100">
                          <h1 class="heading display-4">Corporate & Institutions</h1>
                          <h4 class="subheading font-weight">
                            Our corporate services are carefully planned and executed by our very capable and reliable team of project managers,
                            engineers and technicians. Every job gets our full attention to ensure precision and timely completion.
                            <div class="mr-auto">
                                <a href="#Section"><button type="button" class="btn btn-lily btn-margin btn-rounded text-white" >What We Do <i class="fas fa-caret-right ml-3"></i>
                            </button></a>
                            </div>
                        </h4>
                        </div>

                      </div>



                    </div>

                  </section>



    <div class="row">
            <div class="col-12 px-0 py-0">

                    @include('components.testimonial')


                </div>

    </div>
    <div class="container-fluid pb-5">

            <div class="container gallery-container">

                <h1 id="Section" class="text-center "style="color:black">What We Do</h1>

                <p class="page-description text-center" style="color:black">Long range WiFi Systems</p>

                <div class="tz-gallery">

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ url('storage/images/L1.jpg') }}">
                                <img src="{{ url('storage/images/L1.jpg') }}" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ url('storage/images/L1.jpg') }}">
                                <img src="{{ url('storage/images/L1.jpg') }}" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ url('storage/images/L1.jpg') }}">
                                <img src="{{ url('storage/images/L1.jpg') }}" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ url('storage/images/L1.jpg') }}">
                                <img src="{{ url('storage/images/L1.jpg') }}" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ url('storage/images/L1.jpg') }}">
                                <img src="{{ url('storage/images/L1.jpg') }}" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <a class="lightbox" href="{{ url('storage/images/L1.jpg') }}">
                                <img src="{{ url('storage/images/L1.jpg') }}" alt="Park" class="card-img-top">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

</div>

    </main>

@endsection
