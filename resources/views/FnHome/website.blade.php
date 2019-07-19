@extends('layouts.guest')
@section('content')



<div class="container-fluid py-0">

<div class="row">
<div  class="col-12  px-0 py-0">

    <section class="view">

        <div class="row">

          <div class="col-md-6">

            <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5">
                    {{-- <a class="navbar-brand" href="{{ url('storage/images/L1.jpg') }}"><img src="{{ url('storage/logo.png') }}" alt="" srcset="" style="width:40%"></a> --}}
    <h1 class="heading display-4">Website Design</h1>
              <h4 class="subheading font-weight">
                If you get it right, your website will be the best tool you have for promoting your business.
                 Your website will essentially become an online shop-window, accessible to customers all over the world,
                 which means the better it looks and more and up-to-date it is, the better impression
                 it will make on consumers. We have designed many practical websites for businesses,
                 personal and online shopping.


            </h4>
              <div class="mr-auto">
                <button type="button" class="btn btn-lily btn-margin btn-rounded white-text " >Projetcs <i class="fas fa-caret-right ml-3"></i>
                <a href="#"></a></button>
              </div>
            </div>

          </div>

          <div class="col-md-6">

            <div class="view">
              <img src="{{ url('storage/images/web3.jpg') }}"  class="img-fluid rounded" alt="smaple image">
              <div class="mask flex-center hm-gradient">
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

 <h2 class="h1-responsive font-weight-bold text-center my-5">Website Projects</h2>
<!-- Grid row -->
<div class="row">



  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div class="row">



    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-3">

      <img src="{{ url('storage/images/L1.jpg') }}" class="img-fluid z-depth-1"
        alt="Responsive image">

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-3">

      <img src="{{ url('storage/images/L1.jpg') }}" class="img-fluid z-depth-1"
        alt="Responsive image">

    </div>
    <!-- Grid column -->
    <div class="col-md-6 mb-3">

        <img src="{{ url('storage/images/L1.jpg') }}" class="img-fluid z-depth-1"
          alt="Responsive image">

      </div>
  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div class="row">

    <div class="col-md-6 mb-3">

      <img src="{{ url('storage/images/L1.jpg') }}" class="img-fluid z-depth-1"
        alt="Responsive image">

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->




</div>


@endsection
