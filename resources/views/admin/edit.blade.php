@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8  mt-4">
            <div class="card">
                <div class="card-header bg-white h3 text-center">
                    Edit Profile
                </div>
                <div class="card-body">
                    <form id="updateprofile">
                        <div class="row text-left">
                            <div class="form-group md-form col-6">
                                <input
                                    type="text"
                                    class="form-control adminupdate"
                                    id="profilename"
                                    name="Name"
                                />
                            </div>
                            <div class="form-group md-form col-6">
                                <input
                                    type="email"
                                    class="form-control adminupdate"
                                    id="profilemail"
                                    name="Email"
                                />
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-success" type="submit">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-header bg-white h3 text-center">
                    Admin Details
                </div>
                <div class="card-body text-left">
                    <div>
                        <span class="h6">Name</span>:
                        <span id="profilecardname"></span>
                    </div>
                    <div>
                        <span class="h6">Email</span>:
                        <span id="profilecardemail"></span>
                    </div>
                </div>
                <div class="card-footer bg-white text-center">
                    <div>
                        <a
                            href="#"
                            class="btn btn-warning"
                            data-toggle="modal"
                            data-target="#modalLoginForm"
                            >Change Password</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="modal fade"
        id="modalLoginForm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center h3 bg-primary text-white">
                    <h4 class="modal-title w-100 font-weight-bold">
                        Edit Password
                    </h4>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        id="closeupdatepasswordmodal"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-4">
                        <label>Old password</label>
                        <input
                            type="password"
                            id="Oldpassword"
                            class="form-control"
                            autocomplete="off"
                        />
                    </div>
                    <div class="md-form mb-4">
                        <label>New password</label>
                        <input
                            type="password"
                            id="Newpassword"
                            class="form-control"
                            autocomplete="off"
                        />
                    </div>
                    <div class="md-form mb-4">
                        <label>Confirm Password</label>
                        <input
                            type="password"
                            id="confirmpassword"
                            class="form-control"
                            autocomplete="off"
                        />
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-warning" id="updatepasswordmodal">
                        update password
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
