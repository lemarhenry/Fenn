@extends('layouts.Cms') @section('content')
<style>
    ul {
        list-style: none;
        text-align: left;
    }
    .cursor {
        cursor: pointer;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-md-4 pt-4">
                            <div class="row">
                                <div class="col-4 text-center font-weight-bold">
                                    <span class="h3">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <small>
                                        <span
                                            class="badge badge-success"
                                            id="allcountmessages"
                                            >0</span
                                        >
                                    </small>
                                </div>
                                <div class="col-4 text-center font-weight-bold">
                                    <span class="h3">
                                        <i class="far fa-envelope"></i>
                                    </span>
                                    <small>
                                        <span
                                            class="badge badge-warning"
                                            id="unseenmessages"
                                            >0</span
                                        >
                                    </small>
                                </div>
                                <div class="col-4 text-center font-weight-bold">
                                    <span class="h3">
                                        <i class="far fa-envelope-open"></i>
                                    </span>
                                    <small>
                                        <span
                                            class="badge badge-primary"
                                            id="seenmessages"
                                            >0</span
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
                                    id="messagesearch"
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
                        style="height: 375px; overflow: auto; overflow-x: hidden;"
                        class="align"
                    >
                        <ul id="allmessages" class="mr-4"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div
        class="modal fade"
        id="viewmessage"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header bg-white text-dark">
                    <h5 class="modal-title h3 " id="exampleModalLabel">
                        Message
                    </h5>
                    <span id="messagedate"></span>
                </div>
                <div class="modal-body text-left">
                    <div>
                        <span class="font-weight-bold">Name </span>:
                        <span id="messagename"></span>
                    </div>
                    <div>
                        <span class="font-weight-bold">Email </span>:
                        <span id="messageemail"></span>
                    </div>
                    <br />
                    <div>
                        <span id="messagesubject" class="h6"></span>
                        <div>
                            <span
                                id="messagesbody"
                                class=""
                                data-toggle="collapse"
                                href="#reply"
                                style="cursor: pointer"
                            >
                            </span>
                            <br />
                            <div id="reply" class="collapse mt-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="replymsg">
                                            <div class="md-form">
                                                <i
                                                    class="fas fa-tag prefix grey-text"
                                                ></i>
                                                <input
                                                    type="text"
                                                    id="formSubject"
                                                    class="form-control reply"
                                                    name="subject"
                                                />
                                                <label for="formSubject"
                                                    >Subject</label
                                                >
                                            </div>
                                            <div class="md-form">
                                                <i
                                                    class="fas fa-pencil-alt prefix grey-text"
                                                ></i>
                                                <textarea
                                                    id="formtext"
                                                    class="form-control md-textarea reply"
                                                    rows="2"
                                                    name="body"
                                                ></textarea>
                                                <label for="formtext"
                                                    >Body</label
                                                >
                                            </div>
                                            <div class="text-center">
                                                <button
                                                    class="btn btn-success"
                                                    type="submit"
                                                >
                                                    reply
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div
                                        class="col-md-12 text-center mt-3"
                                        id="rsttg"
                                    >
                                        Replies sent to this guest
                                    </div>
                                    <div
                                        class="mt-3 col-md-12"
                                        id="replies"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-danger"
                        id="deletemessage"
                        data-dismiss="modal"
                    >
                        <i class="fa fa-trash"></i>
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
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
