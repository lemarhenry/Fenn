@extends('layouts.landing') @section('content')


    {{--  <div class="row">
        <div class="col-6 pb-3 pr-0" id="c1">
            <!-- just for space-->
            <br />
            <div
                class="card card-image"
                style="background-image: url(https://www.wallpaperup.com/1089009/backlight_black_close-up_computer_connection_device_display_electronics_equipment_keyboard_laptop_letters_light_modern_office_portable_screen_technology_white.html);"
            >
                <div
                    class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4"
                >
                    <div>
                        <h5 class="green-text ">
                            <i class="fas fa-home"></i>Home
                        </h5>  --}}
                        {{--
                        <h3 class="card-title pt-2">
                            <strong>This is the card title</strong>
                        </h3>
                        --}}
                        {{--  <p>
                            FennTech Ltd is an IT solutions provider with over
                            14 years experience in crafting solutions for home,
                            office, schools and government. The company was
                            founded on the premiseh that you don’t just need a
                            computer, nor a fax machine, but a solution for all
                            your technology needs.
                        </p>
                        <a class="btn btn-green" href="{{ route('fnhome') }}"
                            ><i class="fas fa-home left"></i> Home</a
                        >
                    </div>
                </div>
            </div>
            <!-- just for space-->
            <br />
            <br />
        </div>
        <div class="col-6 pb-3 pr-3 " id="c2">
            <br />
            <div
                class="card card-image"
                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);"
            >
                <div
                    class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4"
                >
                    <div>
                        <h5 class="pink-text">
                            <i class="far fa-building left"></i>Corporate
                        </h5>  --}}
                        {{--
                        <h3 class="card-title pt-2">
                            <strong>This is the card title</strong>
                        </h3>
                        --}}
                        {{--  <p>
                            FennTech Ltd is an IT solutions provider with over
                            14 years experience in crafting solutions for home,
                            office, schools and government. The company was
                            founded on the premiss that you don’t just need a
                            computer, nor a fax machine, but a solution for all
                            your technology needs.
                        </p>
                        <a class="btn btn-pink" href="{{ route('corporate') }}"
                            ><i class="far fa-building left"></i>Corp</a
                        >
                    </div>
                </div>
            </div>
            <!-- just for space-->
            <br />
            <br />
        </div>
        <div class="col-6 pr-0 " id="c3">
            <div
                class="card card-image"
                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);"
            >
                <div
                    class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4"
                >
                    <div>
                        <h5 class="red-text">
                            <i class="fas fa-toolbox"></i> Repair and
                            Installations
                        </h5>  --}}
                        {{--
                        <h3 class="card-title pt-2">
                            <strong>This is the card title</strong>
                        </h3>
                        --}}
                        {{--  <p>
                            FennTech Ltd is an IT solutions provider with over
                            14 years experience in crafting solutions for home,
                            office, schools and government. The company was
                            founded on the premiss that you don’t just need a
                            computer, nor a fax machine, but a solution for all
                            your technology needs.
                        </p>
                        <a class="btn btn-red" href="{{ route('repair') }}"
                            ><i class="fas fa-clone left"></i> Repair
                        </a>
                    </div>
                </div>
            </div>
            <!-- just for space-->
            <br />
            <br />
        </div>
        <div class="col-6 pr-3 " id="c4">
            <div
                class="card card-image "
                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);"
            >
                <div
                    class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4"
                >
                    <div>
                        <h5 class="blue-text">
                            <i class="fas fa-network-wired"></i
                            ><b>Networking and Cabling</b>
                        </h5>  --}}
                        {{--
                        <h3 class="card-title pt-2">
                            <strong>This is the card title</strong>
                        </h3>
                        --}}
                        {{--  <p>
                            FennTech Ltd is an IT solutions provider with over
                            14 years experience in crafting solutions for home,
                            office, schools and government. The company was
                            founded on the premiss that you don’t just need a
                            computer, nor a fax machine, but a solution for all
                            your technology needs.
                        </p>
                        <a class="btn btn-blue" href="{{ route('networking') }}"
                            ><i class="fas fa-network-wired"></i> Network</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- just for space-->
        <br />
        <br />
    </div>  --}}

<div class="accordion">
  <ul>
    <li><a href="#">
      <div>
        <h1>FennTech Home</h1>
        <p>
                            FennTech Ltd is an IT solutions provider with over
                            14 years experience in crafting solutions for home,
                            office, schools and government. The company was
                            founded on the premiseh that you don’t just need a
                            computer, nor a fax machine, but a solution for all
                            your technology needs.
                        </p>
                <div class="col-md-12 text-center"><a href="/fnhome" class="btn btn-primary"> <i class="fas fa-home"></i>Home</a></div>
        </div>
      </a> </li>
    <li><a href="#">
      <div>
        <h1>FennTech Corporate</h1>
        <p>
                            FennTech Ltd is an IT solutions provider with over
                            14 years experience in crafting solutions for home,
                            office, schools and government. The company was
                            founded on the premiseh that you don’t just need a
                            computer, nor a fax machine, but a solution for all
                            your technology needs.
                        </p>
                        <a class="btn btn-blue" href="/corporate"
                            ><i class="fas fa-building"></i> Corporate</a
                        >
        </div>
      </a> </li>
    <li><a href="#">
      <div>
        <h1>FennTech Software Design</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="col-md-12 text-center"><a href="/software" class="btn btn-primary"><i class="fas fa-tv"></i> Software</a></div>
    </div>
      </a> </li>
      <li><a href="#">
      <div>
        <h1>FennTech Networking</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="col-md-12"><a href="/networking" class="btn btn-primary"><i class="fas fa-network"></i>Networking</a></div>
    </div>
      </a> </li>
  </ul>
</div>



@endsection
