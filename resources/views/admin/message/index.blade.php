@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-md-4 pt-4">
                            <div class="row">
                                <div
                                    class="col-6 text-center pr-5 font-weight-bold"
                                >
                                    <span class="h3">
                                        <i class="far fa-envelope"></i>
                                    </span>
                                    <small>
                                        <span
                                            class="badge badge-success"
                                            id="unseenmessages"
                                            >4</span
                                        >
                                    </small>
                                </div>
                                <div class="col-6 tex-center font-weight-bold">
                                    <span class="h3">
                                        <i class="far fa-envelope-open"></i>
                                    </span>
                                    <small>
                                        <span
                                            class="badge badge-primary"
                                            id="seenmessages"
                                            >3</span
                                        >
                                    </small>
                                </div>
                            </div>
                            <hr />
                        </div>
                        <div class="col-md-8">
                            <div class="md-form mb-0">
                                <input
                                    type="text"
                                    id="search"
                                    name="search"
                                    class="form-control"
                                />
                                <label for="name" class="">Search</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div
                        class="row"
                        style="height: 375px; overflow: auto;"
                        id="allmessages"
                    ></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
