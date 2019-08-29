@extends('layouts.Cms') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mb-3">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="text-center h3 text-white">
                        Create Job
                    </div>
                </div>
                <div class="card-body">
                    <form
                        class="text-center border border-light pl-5 pr-5"
                        id="createjob"
                    >
                        <div class="md-form">
                            <input
                                type="text"
                                class="form-control mb-4 job"
                                placeholder="Job name"
                                id="jname"
                                name="job name"
                            />
                        </div>
                        <div class="md-form">
                            <input
                                type="text"
                                class="form-control mb-4 job"
                                placeholder="Requisite 1"
                                id="prereq1"
                                name="Requisite 1"
                            />
                        </div>
                        <div class="md-form">
                            <input
                                type="text"
                                class="form-control mb-4 job"
                                placeholder="Requisite 2"
                                id="prereq2"
                                name="Requisite 2"
                            />
                        </div>
                        <div class="md-form">
                            <input
                                type="text"
                                class="form-control mb-4 job"
                                placeholder="Requisite 3"
                                id="prereq3"
                                name="Requisite 3"
                            />
                        </div>
                        <button class="btn btn-success" type="submit">
                           <i class="fa fa-plus"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
