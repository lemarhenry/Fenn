@extends('layouts.Cms') @section('content')
<style>
    ul {
        text-align: left;
    }
</style>
<div class="container">
    <div class="row" id="alljobs"></div>
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
                    <h4 class="modal-title w-100 font-weight-bold text-white h3">
                        Edit Job
                    </h4>
                    <button
                        id="closejobeditmodal"
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form
                        class="text-center pl-5 pr-5 pt-2"
                        id="editJobform"
                    >
                        <input
                            type="text"
                            class="form-control mb-4 editjobform"
                            placeholder="Job name"
                            id="editjname"
                            name="job name"
                        />
                        <input
                            type="text"
                            class="form-control mb-4 editjobform"
                            placeholder="Requisite 1"
                            id="editprereq1"
                            name="Requisite 1"
                        />
                        <input
                            type="text"
                            class="form-control mb-4 editjobform"
                            placeholder="Requisite 2"
                            id="editprereq2"
                            name="Requisite 2"
                        />
                        <input
                            type="text"
                            class="form-control mb-4 editjobform"
                            placeholder="Requisite 3"
                            id="editprereq3"
                            name="Requisite 3"
                        />
                        <button class="btn btn-warning" type="submit">
                            <i class="fa fa-edit"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
