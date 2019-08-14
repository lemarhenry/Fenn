@extends('layouts.Cms') @section('content')
<style>
    textarea {
        resize: none;
    }
</style>
<div class="container">
    <div class="row" id="viewTestimonial"></div>
    <div
        class="modal fade"
        id="edittestimonialmodal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h4 class="modal-title w-100 font-weight-bold text-white">
                        Edit Testimonial
                    </h4>
                    <button
                    id="closeeditmodal"
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-4">
                        <label for="edclient" class="text-black"
                            >Client Name</label
                        >
                        <input
                            type="text"
                            id="edclient"
                            class="form-control edtestimonial"
                            name="Client Name"
                        />
                    </div>

                    <div class="md-form mb-4">
                        <label for="edsmdes">Small Description</label>
                        <input
                            type="text"
                            id="edsmdes"
                            class="form-control edtestimonial"
                            name="Small Description"
                        />
                    </div>
                    <div class="md-form mb-4">
                        <select
                            class="browser-default custom-select mb-4 edtestimonial"
                            id="edrating"
                            name="Rating"
                        >
                            <option value="" selected>Select rating</option>
                            <option value="1">⭐</option>
                            <option value="2">⭐⭐</option>
                            <option value="3">⭐⭐⭐</option>
                            <option value="4">⭐⭐⭐⭐</option>
                            <option value="5">⭐⭐⭐⭐⭐</option>
                        </select>
                    </div>
                    <div class="md-form mb-4">
                        <textarea
                            type="text"
                            id="edtest"
                            class="form-control edtestimonial"
                            name="Testimonial"
                        >
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-warning" id="updateTestimonial">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
