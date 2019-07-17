@extends('layouts.guest')
@section('content')



<div class="container-fluid py-0">

<div class="row">
<div  class="col-12  px-0 py-0">

    <section class="view">

        <div class="row">

          <div class="col-md-6">

            <div class="d-flex flex-column justify-content-center align-items-center h-100 pt-5">
                    {{-- <a class="navbar-brand" href="#"><img src="{{ url('storage/logo.png') }}" alt="" srcset="" style="width:40%"></a> --}}
              <h1 class="heading display-4">Networking and Cabling</h1>
              <h4 class="subheading font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</h4>
              <div class="mr-auto">
                <button type="button" class="btn btn-lily btn-margin btn-rounded " >Features <i class="fas fa-caret-right ml-3"></i>
                <a href="#section"></a></button>
              </div>
            </div>

          </div>

          <div class="col-md-6">

            <div class="view">
              <img src="{{ url('storage/images/illustrationforcabling.jpg') }}"  class="img-fluid rounded" alt="smaple image">
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

<div  class="row">
<div class="col-lg-12 col-md-6" id="section">
   @include('components.features')

</div>

</div>




@endsection
