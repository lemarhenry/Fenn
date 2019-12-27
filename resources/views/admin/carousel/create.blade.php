@extends('layouts.Cms') @section('content')
<style>
    textarea {
        resize: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center h3 text-white bg-primary">
                    Add Carousel Image
                </div>
                <div class="card-body">
                    <div class="mb-2 text-center">
                        <div class="mb-2">
                            <img
                                src=""
                                alt=""
                                style="width:50%"
                                id="tempcarouselimage"
                            />
                        </div>
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose file</span>
                                <input
                                    type="file"
                                    id="carouselimage"
                                    required
                                />
                            </div>
                            <div class="file-path-wrapper">
                                <input
                                    class="file-path validate"
                                    type="text"
                                    placeholder="Upload your file"
                                    id="carouselout"
                                    readonly
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select
                            class="browser-default custom-select"
                            id="section"
                        >
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea
                            class="form-control rounded-0 caption"
                            rows="3"
                            placeholder="Caption"
                            id="imagecaption"
                            name="Caption"
                        ></textarea>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <div class="text-center">
                        <button class="btn btn-success" id="submitcarousel">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
