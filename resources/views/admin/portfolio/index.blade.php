@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row" id="portfolioandpopulation"></div>

    <div
        class="modal fade"
        id="portfoliomodal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img
                        src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                        alt=""
                        style="width: 100%"
                        id="viewportfolioimagemodal"
                    />
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-danger"
                        data-dismiss="modal"
                        id="deleteportfolioimg"
                    >
                        <i class="fa fa-trash"></i>
                    </button>
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
