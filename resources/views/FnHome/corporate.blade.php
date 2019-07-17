@extends('layouts.guest')
@section('content')
<main>

    <div class="container-fluid py-0">

    <div class="row">
    <div  class="col-12 px-0 py-0">

            <section class="view">

                    <div class="row">

                      <div class="col-md-6">

                        <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                {{-- <a class="navbar-brand" href="#"><img src="{{ url('storage/logo.png') }}" alt="" srcset="" style="width:40%"></a> --}}
                          <h1 class="heading display-4">Corporate and Institutions</h1>
                          <h4 class="subheading font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</h4>
                          <div class="mr-auto">
                            <button type="button" class="btn btn-lily btn-margin btn-rounded " >What we offer <i class="fas fa-caret-right ml-3"></i>
                            <a href="#section"></a></button>
                          </div>
                        </div>

                      </div>

                      <div class="col-md-6">

                        <div class="view">
                          <img src="{{ url('storage/images/corpporate.jpg') }}" style="height:700px "   class="img-fluid rounded" alt="smaple image">
                          <div class="mask flex-center hm-gradient">
                          </div>
                        </div>

                      </div>

                    </div>

                  </section>


    </div>




    </div>

    <div class="row">
            <div class="col-12 px-0 py-0">

                    @include('components.testimonial')


                </div>

    </div>
<div class="container">
        <h2 class="h1-responsive font-weight-bold text-dark my-5">What we offer</h2>
<h3 class="text-left dark-grey-text">Long range WiFi Systems</h3>
<br>
          <div class="row">
            <div class="col-sm-4 pb-1"><img src="{{ url('storage/images/L1.jpg') }}" alt=""></div>
            <div class="col-sm-4 pb-1"><img src="{{ url('storage/images/L1.jpg') }}" alt=""></div>
            <div class="col-sm-4 pb-1"><img src="{{ url('storage/images/L1.jpg') }}" alt=""></div>
          </div>

          <br>

          <div class="row pb-2">
            <div class="col-md-4 pb-1"><img src="{{ url('storage/images/L1.jpg') }}" alt=""></div>
            <div class="col-md-4 pb-1"><img src="{{ url('storage/images/L1.jpg') }}" alt=""></div>
            <div class="col-md-4 pb-1"><img src="{{ url('storage/images/L1.jpg') }}" alt=""></div>
          </div>
          <p  class="text-left dark-grey-text font-weight-bold"> Long range WiFi systems are idea for sending signals up to 60 miles. This can be useful for sharing bandwidth,
                extending your network or connecting your locations. Our technical team is experienced and dedicated to providing
                 tailored solutions.
                We also specialize in campus-wide WiFi for schools, churches and businesses.</p>
          <br>
          <div class="row">
            <div class="col-lg-4">.col-lg-4</div>
            <div class="col-lg-4">.col-lg-4</div>
            <div class="col-lg-4">.col-lg-4</div>
          </div>
          <br>
          <div class="row">
            <div class="col-xl-4">.col-xl-4</div>
            <div class="col-xl-4">.col-xl-4</div>
            <div class="col-xl-4">.col-xl-4</div>
          </div>
        </div>
    </main>

@endsection
