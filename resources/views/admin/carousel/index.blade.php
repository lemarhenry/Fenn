@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row" id="allcarouselimage">
    </div>
    <div
        class="modal fade"
        id="editcarouselmodal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h4 class="modal-title w-100 font-weight-bold text-white">
                        Edit Carousel
                    </h4>
                    <button
                        id="closecarouselmodal"
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="mb-2">
                        <div class="mb-2 text-center">
                            <img
                                src=""
                                alt=""
                                style="width:50%"
                                id="editcarouselimage"
                            />
                        </div>
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose file</span>
                                <input
                                    type="file"
                                    id="editcarouselimagein"
                                    required
                                />
                            </div>
                            <div class="file-path-wrapper">
                                <input
                                    class="file-path validate"
                                    type="text"
                                    placeholder="Upload your file"
                                    id="editcarouselout"
                                    readonly
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea
                            class="form-control rounded-0 caption"
                            rows="3"
                            placeholder="Caption"
                            id="editimagecaption"
                            name="Caption"
                        ></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-warning" id="updateCarousel">
                        Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
