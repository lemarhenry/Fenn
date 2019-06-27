@extends('layouts.guest')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0 py-0">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 h-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                      alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 h-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg"
                      alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 h-75" src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg"
                      alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="col-12">

        </div>
    </div>
</div>
@endsection
