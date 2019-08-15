@extends('layouts.Cms')
@section('content')
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
                    <form
                        class="border border-light p-3"
                        id="addcarousel"
                    >
                        <div class="form-group">
                            <textarea
                                class="form-control rounded-0 caption"
                                rows="3"
                                placeholder="Caption"
                                id="imagecaption"
                                name="Caption"
                            ></textarea>
                        </div>
                        <div class="pb-1">
                            <input type="file" name="Carousel image" id="carouseliamge">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-info" type="submit">
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
