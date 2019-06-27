@extends('layouts.landing')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-6 pb-3 pr-0">
            <div class="card card-image" style="background-image: url(https://www.wallpaperup.com/1089009/backlight_black_close-up_computer_connection_device_display_electronics_equipment_keyboard_laptop_letters_light_modern_office_portable_screen_technology_white.html);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">

                  <div>
                    <h5 class="green-text "><i class="fas fa-home"></i></i>Home</h5>
                    <h3 class="card-title pt-2"><strong>This is the card title</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                      optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                      Odit sed qui, dolorum!.</p>
                    <a class="btn btn-green"  href="{{route('fnhome')}}"><i class="fas fa-home left"></i> Home</a>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-6 pb-3 pr-1 ">
            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                  <div>
                    <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Marketing</h5>
                    <h3 class="card-title pt-2"><strong>This is the card title</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                      optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                      Odit sed qui, dolorum!.</p>
                    <a class="btn btn-pink"><i class="fas fa-clone left"></i> View project</a>
                  </div>
                </div>

              </div>
        </div>
        <div class="col-6 pr-0 ">
            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                  <div>
                    <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Marketing</h5>
                    <h3 class="card-title pt-2"><strong>This is the card title</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                      optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                      Odit sed qui, dolorum!.</p>
                    <a class="btn btn-pink"><i class="fas fa-clone left"></i> View project</a>
                  </div>
                </div>

              </div>
        </div>
        <div class="col-6 pr-1">
            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                  <div>
                    <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Marketing</h5>
                    <h3 class="card-title pt-2"><strong>This is the card title</strong></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                      optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                      Odit sed qui, dolorum!.</p>
                    <a class="btn btn-pink"><i class="fas fa-clone left"></i> View project</a>
                  </div>
                </div>

              </div>
        </div>
    </div>
</div>

@endsection

