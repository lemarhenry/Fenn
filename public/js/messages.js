getMessages = () => {
    axios
        .get("/messages")
        .then(res => {
            setInterval(() => {
                getNewmsg(res.data.length);
            }, 10000);
            $("#totalmessage").html(res.data.length);
            let output = "";
            let seen = res.data.filter(s => !s.seen);
            let unseen = res.data.filter(s => s.seen);
            let allcountmessages = res.data.length;
            if (seen.length > 0) {
                $("#newmessages").html(`
                <a class="nav-link text-dark" href="/view/message">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-success badge-sm" style="font-size:8px">${seen.length}</span>
                </a>`);
            } else {
                $("#newmessages").html("");
            }
            $("#unseenmessages").html(seen.length);
            $("#seenmessages").html(unseen.length);
            $("#allcountmessages").html(allcountmessages);
            res.data.forEach(m => {
                let mcl = !m.seen ? "blue lighten-4" : "";
                let message =
                    m.body.length < 59 ? m.body : m.body.slice(0, 55) + " ...";
                created_at = new Date(`${m.created_at}`);
                created = created_at.toString().slice(0, 24);
                output += ` <li class="${mcl}">
                                <div class="row p-2">
                                    <div class="col-3">
                                    <span class="font-weight-bold text-left">
                                        ${m.name}
                                    </span>
                                    </div>
                                    <div class="col-6 cursor readmessage" id="rm${m.id}"
                                     data-toggle="modal"
                                     data-target="#viewmessage"
                                     >
                                    <span class="text-left"
                                    >
                                    ${message}
                                    </span>

                                    </div>
                                    <div class="col-3">
                                        <span class="text-left">
                                        ${created}
                                        </span>
                                    </div>
                                </div>
                                <hr />
                            </li>`;
            });
            let allmessages = document.querySelector("#allmessages") || null;
            if (allmessages) {
                allmessages.innerHTML =
                    output ||
                    "<li><div class='row'><div class='col-12 text-center text-muted'> Inbox empty</div> </div></li>";
            }
            let readmessage = document.querySelectorAll(".readmessage") || null;
            if (readmessage) {
                readmessage.forEach(r => {
                    r.addEventListener("click", () => {
                        seenMessage(r.id.substring(2));
                        viewMessage(r.id.substring(2));
                        state.msg_id = r.id.substring(2);
                    });
                });
            }
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

getMessages();

getNewmsg = msg => {
    axios
        .get("/messages")
        .then(res => (res.data.length != msg ? getMessages() : ""))
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

seenMessage = id => {
    axios
        .put(`/seen/message/${id}`)
        .then(res => {
            getMessages();
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

viewMessage = id => {
    axios
        .get(`/single/message/${id}`)
        .then(res => {
            created_at = new Date(`${res.data.created_at}`);
            created = created_at.toString().slice(0, 24);
            $("#messagedate").html(created);
            $("#messagename").html(res.data.name);
            $("#messageemail").html(res.data.email);
            $("#messagesubject").html(res.data.subject);
            $("#messagesbody").html(res.data.body);
            getMessages();
            getReplies(res.data.id);
            state.msg_id = res.data.id;
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

let deletemessage = document.querySelector("#deletemessage") || null;
if (deletemessage) {
    deletemessage.addEventListener("click", () => {
        deleteMessage();
    });
}

deleteMessage = () => {
    axios
        .delete(`/delete/message/${state.msg_id}`)
        .then(res => {
            iziToast.success({
                message: "Message deleted successfully!",
                position: "topCenter"
            });
            getMessages();
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

var messagesearch = document.querySelector("#messagesearch") || null;
if (messagesearch) {
    messagesearch.addEventListener("keyup", () => {
        let search =
            messagesearch.value.length > 0 ? messagesearch.value : null;
        searchMessage(search);
    });
}

searchMessage = search => {
    if (search != "") {
        axios
            .post("/search/messages", { search })
            .then(res => {
                let output = "";
                let seen = res.data.filter(s => !s.seen);
                let unseen = res.data.filter(s => s.seen);
                $("#unseenmessages").html(seen.length);
                $("#seenmessages").html(unseen.length);
                res.data.forEach(m => {
                    let mcl = !m.seen ? "blue lighten-4" : "";
                    let message =
                        m.body.length < 59
                            ? m.body
                            : m.body.slice(0, 55) + " ...";
                    created_at = new Date(`${m.created_at}`);
                    created = created_at.toString().slice(0, 24);
                    output += ` <li class="${mcl}">
                                <div class="row p-2">
                                    <div class="col-3">
                                    <span class="font-weight-bold text-left">
                                        ${m.name}
                                    </span>
                                    </div>
                                    <div class="col-6 cursor readmessage" id="rm${m.id}"
                                     data-toggle="modal"
                                     data-target="#viewmessage"
                                     >
                                    <span class="text-left">
                                    ${message}
                                    </span>
                                    </div>
                                    <div class="col-3">
                                        <span class="text-left">
                                        ${created}
                                        </span>
                                    </div>
                                </div>
                                <hr />
                            </li>`;
                });
                let allmessages =
                    document.querySelector("#allmessages") || null;
                if (allmessages) {
                    allmessages.innerHTML = output;
                }
                let readmessage =
                    document.querySelectorAll(".readmessage") || null;
                if (readmessage) {
                    readmessage.forEach(r => {
                        r.addEventListener("click", () => {
                            seenMessage(r.id.substring(2));
                            viewMessage(r.id.substring(2));
                            state.msg_id = r.id.substring(2);
                        });
                    });
                }
            })
            .catch(err => {
                throw err;
            });
    } else {
        getMessages();
    }
};

var replymsg = document.querySelector("#replymsg") || null;
if (replymsg) {
    replymsg.addEventListener("submit", e => {
        e.preventDefault();
        replyMessage();
    });
}

replyMessage = () => {
    let fields = document.querySelectorAll(".reply") || null;
    let fd = new FormData();
    let pass = false;
    if (fields) {
        fields.forEach(r => {
            if (r.value == "") {
                pass = false;
                iziToast.error({
                    message: `${r.name} field is empty or invalid !`,
                    position: "topCenter"
                });
            } else {
                pass = true;
                fd.append(r.name, r.value);
            }
        });
    }
    if (pass) {
        axios
            .post(`/reply/message/${state.msg_id}`, fd)
            .then(res => {
                fields.forEach(r => {
                    r.value = "";
                });
                iziToast.success({
                    message: "Reply sent successfully!",
                    position: "topCenter"
                });
                getReplies(state.msg_id);
            })
            .catch(err => {
                console.log(err.message);
            });
    }
};

getReplies = id => {
    let output = "";
    axios.get(`/replies/messages/${id}`).then(res => {
        if (res.data.length < 1) {
            $("#rsttg").attr("style", "display:none");
        } else {
            $("#rsttg").attr("style", "display:block");
        }
        res.data.forEach(r => {
            created_at = new Date(`${r.created_at}`);
            created = created_at.toString().slice(0, 24);
            output += `<div class="col-12 mb-3">
                    <div class="card z-depth-0 border-light">
                        <div
                            class="card-header bg-white"
                        >
                        <div class="row">
                        <div class="col-md-6 text-left">
                        <div>
                            <span
                                class="font-weight-bold"
                            >
                                Subject
                            </span>
                            : ${r.subject}
                        </div>
                        </div>
                        <div class="col-md-6 text-right">
                            ${created}
                        </div>
                        </div>
                        </div>
                        <div class="card-body">
                            <div>
                               ${r.body}
                            </div>
                        </div>
                        <div class="card-footer text-right bg-white">
                        <button class="btn btn-sm btn-danger deletereply" id="dr${r.id}">
                        <i class="fa fa-trash "></i>
                        </button>
                        </div>
                    </div>
                </div>
               <hr>
                `;
        });
        let replies = document.querySelector("#replies") || null;
        if (replies) {
            replies.innerHTML = output || "";
        }
        let deletereply = document.querySelectorAll(".deletereply") || null;
        if (deletereply) {
            deletereply.forEach(d => {
                d.addEventListener("click", () => {
                    replyDelete(d.id.substring(2));
                });
            });
        }
    });
};

replyDelete = id => {
    axios
        .delete(`/delete/reply/${id}`)
        .then(res => {
            iziToast.success({
                message: "Reply deleted successfully!",
                position: "topCenter"
            });
            getReplies(state.msg_id);
        })
        .catch(err => {
            iziToast.error({
                message: err.message,
                position: "topCenter"
            });
        });
};
