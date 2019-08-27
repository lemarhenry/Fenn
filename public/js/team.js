var memberimage = document.querySelector("#memberimage") || null;
if (memberimage) {
    memberimage.addEventListener("change", event => {
        TemPic(event.target, "tempMemberimage");
        document.querySelector("#memberout").value = event.target.files[0].name;
    });
}

var ememberimage = document.querySelector("#ememberimage") || null;
if (ememberimage) {
    ememberimage.addEventListener("change", event => {
        TemPic(event.target, "etempMemberimage");
        document.querySelector("#ememberout").value =
            event.target.files[0].name;
    });
}

var createmember = document.querySelector("#createmember") || null;
if (createmember) {
    createmember.addEventListener("submit", event => {
        event.preventDefault();
        memberCreate();
    });
}

var ecreatemember = document.querySelector("#ecreatemember") || null;
if (ecreatemember) {
    ecreatemember.addEventListener("submit", event => {
        event.preventDefault();
        memberUpdate();
    });
}

memberCreate = () => {
    let pass = false;
    let fd = new FormData();
    let team = document.querySelectorAll(".team") || null;
    if (!state.img) {
        iziToast.error({
            position: "topCenter",
            message: "An image is required!"
        });
    } else {
        if (team) {
            team.forEach(t => {
                if (t.value == "") {
                    pass = false;
                    iziToast.error({
                        message: `${t.name} field is required!`,
                        position: "topCenter"
                    });
                } else {
                    pass = true;
                    fd.append(t.id, t.value);
                }
            });
            fd.append("img", state.img.files[0]);
        }
        if (pass) {
            axios
                .post("/create/team", fd)
                .then(res => {
                    iziToast.success({
                        position: "topCenter",
                        message: "Team member added successfully!"
                    });
                    team.forEach(t => {
                        t.value = "";
                    });
                    document.querySelector("#memberout").value = "";
                    $("#tempMemberimage").attr("src", "");
                })
                .catch(err => {
                    iziToast.error({
                        message: err.message,
                        position: "topCenter"
                    });
                });
        }
    }
};

getMembers = () => {
    let output = "";
    axios
        .get("/team")
        .then(res => {
            $("#totalteammembers").html(res.data.length);
            res.data.forEach(t => {
                output += `<div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header bg-white">
                    <div>
                        <img
                            src="/storage/team/${t.img}"
                            alt=""
                            srcset=""
                            style="width: 100%"
                        />
                    </div>
                </div>
                <div class="card-body text-center">
                    <span class="font-weight-bold h4">${t.name}</span
                    ><br />
                    <span class="font-weight-bold">${t.position}</span>
                </div>
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col-6 text-right">
                            <button class="btn btn-warning tedit" id="te${t.id}"
                            >
                                <i class="fa fa-edit"> </i>
                            </button>
                        </div>
                        <div class="col-6 text-left">
                            <button class="btn btn-danger tdelete" id="td${t.id}">
                                <i class="fa fa-trash"> </i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
            });
            let teamMembers = document.querySelector("#teamMembers") || null;
            if (teamMembers) {
                teamMembers.innerHTML =
                    output ||
                    "<div class='col-md-12 text-center'>No team members to show.</div>";
            }
            let tdelete = document.querySelectorAll(".tdelete") || null;
            if (tdelete) {
                tdelete.forEach(d => {
                    d.addEventListener("click", () => {
                        memberDelete(d.id.substring(2));
                    });
                });
            }
            let tedit = document.querySelectorAll(".tedit") || null;
            if (tedit) {
                tedit.forEach(e => {
                    e.addEventListener("click", () => {
                        memberData(e.id.substring(2));
                        state.edit_id = e.id.substring(2);
                    });
                });
            }
        })
        .catch(err => {
            iziToast.error({
                message: err.message,
                position: "topCenter"
            });
        });
};

getMembers();

memberDelete = id => {
    axios
        .delete(`/delete/team/${id}`)
        .then(res => {
            iziToast.success({
                message: "Team member deleted successfully!",
                position: "topCenter"
            });
            getMembers();
        })
        .catch(err => {
            iziToast.error({
                message: err.message,
                position: "topCenter"
            });
        });
};

memberUpdate = () => {
    let pass = false;
    let fd = new FormData();
    let team = document.querySelectorAll(".eteam") || null;
    if (state.img) {
        fd.append("img", state.img.files[0]);
    }
    if (team) {
        team.forEach(t => {
            if (t.value == "") {
                pass = false;
                iziToast.error({
                    message: `${t.name} field is required!`,
                    position: "topCenter"
                });
            } else {
                pass = true;
                fd.append(t.id, t.value);
            }
        });
    }
    if (pass) {
        axios
            .post(`/update/team/${state.edit_id}`, fd)
            .then(res => {
                iziToast.success({
                    position: "topCenter",
                    message: "Team member updated successfully!"
                });
                team.forEach(t => {
                    t.value = "";
                });
                document.querySelector("#ememberout").value = "";
                $("#etempMemberimage").attr("src", "");
                $("#teameditclosemodal").click();
                $("#teameditclosemodal").click();

                getMembers();
            })
            .catch(err => {
                iziToast.error({
                    message: err.message,
                    position: "topCenter"
                });
            });
    }
};

memberData = id => {
    axios
        .get(`/single/team/${id}`)
        .then(res => {
            $("#teameditbtn").click();
            $("#etempMemberimage").attr("src", `/storage/team/${res.data.img}`);
            $("#etname").val(res.data.name);
            $("#etposition").val(res.data.position);
        })
        .catch(err => {
            iziToast.error({
                message: err.message,
                position: "topCenter"
            });
        });
};
