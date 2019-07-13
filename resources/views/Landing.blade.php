@extends('layouts.landing')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-6 pb-3 pr-0">
            <!-- just for space-->
            <br>
            <div class="card card-image" style="background-image: url(https://www.wallpaperup.com/1089009/backlight_black_close-up_computer_connection_device_display_electronics_equipment_keyboard_laptop_letters_light_modern_office_portable_screen_technology_white.html);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">

                  <div>
                    <h5 class="green-text "><i class="fas fa-home"></i></i>Home</h5>
                    {{-- <h3 class="card-title pt-2"><strong>This is the card title</strong></h3> --}}
                    <p> FennTech Ltd is an IT solutions provider with over 14 years experience in crafting solutions for home, office, schools and government.
                            The company was founded on the premiseh that you don’t just need a computer, nor a fax machine, but a solution for all your technology needs.</p>
                    <a class="btn btn-green"  href="{{route('fnhome')}}"><i class="fas fa-home left"></i> Home</a>
                  </div>
                </div>
            </div>
            <!-- just for space-->
            <br>
            <br>
        </div>
        <div class="col-6 pb-3 pr-3 ">

                <br>
            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                  <div>
                    <h5 class="pink-text"><i class="far fa-building left"></i>Corporate</h5>
                    {{-- <h3 class="card-title pt-2"><strong>This is the card title</strong></h3> --}}
                    <p> FennTech Ltd is an IT solutions provider with over 14 years experience in crafting solutions for home, office, schools and government.
                            The company was founded on the premiss that you don’t just need a computer, nor a fax machine, but a solution for all your technology needs.</p>
                    <a class="btn btn-pink"  href="{{route('corporate')}}"><i class="far fa-building left"></i>Corporate</a>
                  </div>
                </div>

              </div>
<!-- just for space-->
            <br>
            <br>
        </div>
        <div class="col-6 pr-0 ">

            <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                  <div>
                    <h5 class="pink-text"><i class="fas fa-chart-pie"></i> Marketing</h5>
                    {{-- <h3 class="card-title pt-2"><strong>This is the card title</strong></h3> --}}
                    <p> FennTech Ltd is an IT solutions provider with over 14 years experience in crafting solutions for home, office, schools and government.
                            The company was founded on the premiss that you don’t just need a computer, nor a fax machine, but a solution for all your technology needs.</p>
                    <a class="btn btn-pink"><i class="fas fa-clone left"></i> View project</a>
                  </div>
                </div>

              </div>
              <!-- just for space-->
              <br>
            <br>
        </div>
        <div class="col-6 pr-3 " >
            <div class="card card-image " style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                  <div>

                    <h5 class="blue-text"><i class="fas fa-network-wired"></i><b>Networking and Cabling</b> </h5>
                    {{-- <h3 class="card-title pt-2"><strong>This is the card title</strong></h3> --}}
                    <p>
                        FennTech Ltd is an IT solutions provider with over 14 years experience in crafting solutions for home, office, schools and government.
                        The company was founded on the premiss that you don’t just need a computer, nor a fax machine, but a solution for all your technology needs.
                        </p>
                    <a class="btn btn-blue"  href="{{route('Networking')}}"><i class="fas fa-clone left"></i> GO!</a>
                  </div>
                </div>


              </div>
        </div>
        <!-- just for space-->
        <br>
            <br>
    </div>
</div>

@endsection
