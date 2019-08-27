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
                <div class="card-header bg-primary">
                    <div class="text-center h3 text-white">
                        Create Portfolio
                    </div>
                </div>
                <div class="card-body">
                    <form
                        class="text-center border border-light p-2"
                        id="createportfolio"
                    >
                        <div class="mb-2">
                            <img
                                src=""
                                alt=""
                                style="width:50%"
                                id="tempportfolioimage"
                            />
                        </div>
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose file</span>
                                <input
                                    type="file"
                                    id="portfolioimage"
                                    required
                                />
                            </div>
                            <div class="file-path-wrapper">
                                <input
                                    class="file-path validate"
                                    type="text"
                                    placeholder="Upload your file"
                                    id="portfolioout"
                                    readonly
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control rounded-0 portfolio"
                                rows="3"
                                placeholder=" Portfolio name."
                                id="portname"
                                name="name"
                            />
                        </div>
                        <div class="form-group">
                            <textarea
                                class="form-control rounded-0 portfolio"
                                rows="3"
                                placeholder="Portfolio description."
                                id="portdiscription"
                                name="description"
                            ></textarea>
                        </div>
                        <button class="btn btn-success" type="submit">
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-4" id="portfolios"></div>
    <button
        data-toggle="modal"
        data-target="#addportimage"
        style="display: none"
        id="openaddportimg"
    ></button>

    <div
        class="modal fade"
        id="addportimage"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <div class="modal-title">
                        <div class="text-center text-white h3">
                            Add Image
                        </div>
                    </div>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        id="closeportimgmodal"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <img
                            src=""
                            alt=""
                            style="width:50%"
                            id="tempportimage"
                        />
                    </div>
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Choose file</span>
                            <input
                                type="file"
                                id="addportfolioimage"
                                required
                            />
                        </div>
                        <div class="file-path-wrapper">
                            <input
                                class="file-path validate"
                                type="text"
                                placeholder="Upload your file"
                                id="addportfolioout"
                                readonly
                            />
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-white">
                    <button
                        type="button"
                        class="btn btn-success"
                        id="saveportimg"
                    >
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit modal -->
    <button
        data-toggle="modal"
        data-target="#addporteditimage"
        style="display: none"
        id="openaddporteditimg"
    ></button>

    <div
        class="modal fade"
        id="addporteditimage"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary ">
                    <div class="modal-title w-100">
                        <div class="text-center text-white h3">
                          Edit Portfolio
                        </div>
                    </div>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        id="closeportedit"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-2 text-center">
                        <img
                            src=""
                            alt=""
                            style="width:50%"
                            id="tempportimageedit"
                        />
                    </div>
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Choose file</span>
                            <input
                                type="file"
                                id="addportfolioimageedit"
                                required
                            />
                        </div>
                        <div class="file-path-wrapper">
                            <input
                                class="file-path validate"
                                type="text"
                                placeholder="Upload your file"
                                id="addportfoliooutedit"
                                readonly
                            />
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control rounded-0 portfolioedit"
                                rows="3"
                                placeholder=" Portfolio name."
                                id="portnameedit"
                                name="name"
                            />
                        </div>
                        <div class="form-group">
                            <textarea
                                class="form-control rounded-0 portfolioedit"
                                rows="3"
                                placeholder="Portfolio description."
                                id="portdiscriptionedit"
                                name="description"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="updateportfolioedit">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
