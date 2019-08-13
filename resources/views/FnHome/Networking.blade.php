@extends('layouts.guest') @section('content')

<div class="container-fluid ">
    <section class="view p-5">
        <div class="row">
            <div class="col-md-6">
                <div class="view">
                    <img
                        src="{{
                            url('storage/images/illustrationforcabling.jpg')
                        }}"
                        style="height:435px;width:870px"
                        class="img-fluid rounded"
                        alt="smaple image"
                    />
                    <div class="mask flex-center hm-gradient"></div>
                </div>
            </div>
            <div class="col-md-6 card">
                <div
                    class="d-flex flex-column justify-content-center align-items-center "
                >
                    <h1 class="heading display-4">Networking and Cabling</h1>
                    <h4 class="subheading font-weight">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Fugit, error amet numquam iure provident voluptate
                        esse quasi, veritatis totam voluptas nostrum quisquam
                        eum porro a pariatur veniam.
                        <div class="mr-auto">
                            <a href="#section">
                                <button
                                    type="button"
                                    class="btn btn-lily btn-margin btn-rounded white-text "
                                >
                                    Features
                                    <i
                                        class="fas fa-caret-right ml-3"
                                    ></i></button
                            ></a>
                        </div>

                      </div>
          <div class="col-md-6 card">

            <div class="d-flex flex-column justify-content-center align-items-center ">

              <h1 class="heading display-4">Networking and Cabling</h1>
              <h4 class="subheading font-weight">
                Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure
                provident voluptate esse quasi, veritatis totam
                voluptas nostrum quisquam eum porro a pariatur
                veniam.
                <div class="mr-auto">
               <a href="#section"> <button type="button" class="btn btn-lily btn-margin btn-rounded white-text " >Features <i class="fas fa-caret-right ml-3"></i>
                </button></a>
              </div>
            </h4>

            </div>
        </div>
    </section>
    <!-- Intro -->

    <div class="row container-fluid">
        <div class="col-12 px-0 py-0">
            @include('components.testimonial')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-6" id="section">
            @include('components.features')
        </div>
    </div>

    @endsection
</div>
