@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row" id="teamMembers"></div>
    <!-- Button trigger modal -->
    <button
        data-toggle="modal"
        data-target="#editteammember"
        style="display: none"
        id="teameditbtn"
    ></button>

    <div
        class="modal fade"
        id="editteammember"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title text-white">
                        Edit Team Member
                    </h3>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        id="teameditclosemodal"
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
                            id="etempMemberimage"
                        />
                    </div>
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Choose file</span>
                            <input type="file" id="ememberimage" required />
                        </div>
                        <div class="file-path-wrapper">
                            <input
                                class="file-path validate"
                                type="text"
                                placeholder="Upload your file"
                                id="ememberout"
                                readonly
                            />
                        </div>
                    </div>
                    <form class="text-center p-2" id="ecreatemember">
                        <div class="form-group">
                            <input
                                class="form-control rounded-0 eteam"
                                rows="3"
                                placeholder="Name"
                                id="etname"
                                name="name"
                            />
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control rounded-0 eteam"
                                rows="3"
                                placeholder="Position"
                                id="etposition"
                                name="position"
                            />
                        </div>
                        <button class="btn btn-success" type="submit">
                            Save changes
                        </button>
                    </form>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-success">
                    Save changes
                </button>
            </div> -->
        </div>
    </div>
</div>

@endsection
