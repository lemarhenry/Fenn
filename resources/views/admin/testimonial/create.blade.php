@extends('layouts.Cms') @section('content')
<style>
    textarea {
        resize: none;
    }
</style>
<div class="container mb-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="text-center h3 text-white">
                        Create Testimonial
                    </div>
                </div>
                <div class="card-body">
                    <form
                        class="text-center border border-light pl-5 pr-5"
                        id="createTestimonial"
                    >
                        <!-- Name -->
                        <div class="md-form">
                            <input
                                type="text"
                                class="form-control mb-4 testimonial"
                                placeholder="Client name"
                                id="Name"
                                name="Client Name"
                            />
                        </div>

                        <div class="md-form">
                            <input
                                type="text"
                                class="form-control mb-4 md-form testimonial"
                                placeholder="Small description"
                                id="sm_description"
                                name="Small Description"
                            />
                        </div>

                        <select
                            class="browser-default custom-select mb-4 testimonial"
                            id="rating"
                            name="Rating"
                        >
                            <option value="" selected>Rating</option>
                            <option value="1">⭐</option>
                            <option value="2">⭐⭐</option>
                            <option value="3">⭐⭐⭐</option>
                            <option value="4">⭐⭐⭐⭐</option>
                            <option value="5">⭐⭐⭐⭐⭐</option>
                        </select>

                        <!-- Message -->
                        <div class="form-group md-form">
                            <textarea
                                class="form-control rounded-0 testimonial"
                                rows="3"
                                placeholder=" Testimonial"
                                id="testimonial"
                                name="Testimonial"
                            ></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
