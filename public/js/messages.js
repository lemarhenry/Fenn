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
                <span class="badge badge-success badge-sm" style="font-size:8px">${
                    seen.length
                }</span>
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
                                    <div class="col-6 cursor readmessage" id="rm${
                                        m.id
                                    }"
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
            .post("/search/messages", { search: search })
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
                                    <div class="col-6 cursor readmessage" id="rm${
                                        m.id
                                    }"
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
                console.log(err.message);
            });
    } else {
        getMessages();
    }
};
