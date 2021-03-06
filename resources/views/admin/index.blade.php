@extends('layouts.Cms') @section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6" id="ttcard">
            <div class="card bg-primary text-center">
                <div class="card-body">
                    <div class="pull-right text-white h2 ">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <p class="white-text">
                        <span class="h3"
                            >Total Testimonials &nbsp;
                            <span class="h4" id="totalTestimonial"
                                >0</span
                            ></span
                        >
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-primary  text-center">
                <div class="card-body">
                    <div class="pull-right text-white h2">
                        <i class="far fa-file-image"></i>
                    </div>
                    <p class="white-text">
                        <span class="h3"
                            >Total Carousel Images &nbsp;
                            <span class="h4" id="totalcarousel">0</span></span
                        >
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card bg-primary  text-center">
                <div class="card-body">
                    <div class="pull-right text-white h2">
                        <i class="far fa-images"></i>
                    </div>
                    <p class="white-text">
                        <span class="h3"
                            >Total Portfolio &nbsp;
                            <span class="h4" id="totalportfolio">0</span></span
                        >
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card bg-primary  text-center">
                <div class="card-body">
                    <div class="pull-right text-white h2">
                        <i class="far fa-envelope"> </i>
                    </div>
                    <p class="white-text">
                        <span class="h3">Total Message &nbsp;
                            <span class="h4" id="totalmessage">0</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card bg-primary  text-center">
                <div class="card-body">
                    <div class="pull-right text-white h2">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <p class="white-text">
                        <span class="h3">Total Jobs &nbsp;
                            <span class="h4" id="totaljobs">0</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4 mb-4">
            <div class="card bg-primary  text-center">
                <div class="card-body">
                    <div class="pull-right text-white h2">
                        <i class="fas fa-users"></i>
                   </div>
                    <p class="white-text">
                        <span class="h3">Total Team Members &nbsp;
                            <span class="h4" id="totalteammembers">0</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
