@extends('layouts.guest') @section('content')
<div class="container-fluid">
    <section class="my-5">
        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">
            Contact us
        </h2>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto pb-2">
            Please fill out the below contact form and we will get back to you
            as soon as possible.
        </p>

        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-6">
                <div class="view">
                    <img
                        src="{{ url('storage/images/contact.jpg') }}"
                        class="img-fluid rounded dropshadowimg"
                        alt="smaple image"
                    />
                    <div class="mask flex-center hm-gradient"></div>
                </div>
            </div>
            <div class="col-lg-6 mb-lg-0 mb-4">
                <!-- Form with header -->
                <div class="card">
                    <div class="card-header blue accent-1 text-white">
                        <div class="form-header ">
                            <h3 class="mt-2">
                                <i class="fas fa-envelope"></i> Write to us:
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Header -->

                        <p class="dark-grey-text">
                            We write rarely, but only the best content.
                        </p>
                        <form id="sendmsg">
                            <div class="md-form">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input
                                    type="text"
                                    id="formname"
                                    class="form-control"
                                />
                                <label for="formname">Your name</label>
                                <span id="errorname" class="text-danger"></span>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input
                                    type="text"
                                    id="formemail"
                                    class="form-control"
                                />
                                <label for="formemail">Your email</label>
                                <span
                                    id="erroremail"
                                    class="text-danger"
                                ></span>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-tag prefix grey-text"></i>
                                <input
                                    type="text"
                                    id="formSubject"
                                    class="form-control"
                                />
                                <label for="formSubject">Subject</label>
                                <span
                                    id="errorsubject"
                                    class="text-danger"
                                ></span>
                            </div>
                            <div class="md-form">
                                <i
                                    class="fas fa-pencil-alt prefix grey-text"
                                ></i>
                                <textarea
                                    id="formtext"
                                    class="form-control md-textarea"
                                    rows="3"
                                ></textarea>
                                <span id="errorbody" class="text-danger"></span>
                                <label for="formtext">Send message</label>
                            </div>
                            <div class="text-center">
                                <button
                                    class="btn btn-light-blue"
                                    type="submit"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Form with header -->
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </section>

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <!--Google map-->
            <div
                id="map-container-google-2"
                class="z-depth-1-half map-container-section mb-4"
                style="height: 500px"
            >
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.7010773439033!2d-77.51254478549363!3d18.039071087691113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edbbe358ac8c7fd%3A0xdacc57f21b077437!2sFennTech!5e0!3m2!1sen!2sjm!4v1563382890091!5m2!1sen!2sjm"
                    frameborder="0"
                    style="border:0"
                    allowfullscreen
                ></iframe>
            </div>
            <!-- Buttons-->
            <div class="row text-center pb-2">
                <div class="col-md-4">
                    <a class=" btn btn-floating blue accent-1">
                        <i class="fas fa-map-marker-alt"></i>
                    </a>
                    <p>
                        Shop #13, Juici Plaza, Mandeville, Manchester <br />
                        <span class="mb-md-0">Jamaica W.I.</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-floating blue accent-1">
                        <i class="fas fa-phone"></i>
                    </a>
                    <p>
                        +1876-619-8324 <br />
                        <span class="mb-md-0">Mon - Sat, 9:00-5:00</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-floating blue accent-1">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <p>info@fenntechltd.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
