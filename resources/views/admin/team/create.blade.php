@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="text-center font-weight-bold h3 text-white">
                        Create Member
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-2 text-center">
                        <img
                            src=""
                            alt=""
                            style="width:50%"
                            id="tempMemberimage"
                        />
                    </div>
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Choose file</span>
                            <input type="file" id="memberimage" required />
                        </div>
                        <div class="file-path-wrapper">
                            <input
                                class="file-path validate"
                                type="text"
                                placeholder="Upload your file"
                                id="memberout"
                                readonly
                            />
                        </div>
                    </div>
                    <form class="text-center p-2" id="createmember">
                        <div class="form-group">
                            <input
                                class="form-control rounded-0 team"
                                rows="3"
                                placeholder="Name"
                                id="tname"
                                name="name"
                            />
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control rounded-0 team"
                                rows="3"
                                placeholder="Position"
                                id="tposition"
                                name="position"
                            />
                        </div>
                        <button class="btn btn-success" type="submit">
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
