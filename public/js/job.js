var createjob = document.querySelector("#createjob") || null;
if (createjob) {
    createjob.addEventListener("submit", event => {
        event.preventDefault();
        createJob();
    });
}

createJob = () => {
    let fd = new FormData();
    let job = document.querySelectorAll(".job") || null;
    let jname = document.querySelector("#jname") || null;
    if (jname && jname.value != "") {
        if (job) {
            job.forEach(j => {
                fd.append(j.id, j.value);
            });
            axios
                .post("/create/job", fd)
                .then(res => {
                    iziToast.success({
                        message: "Job created!",
                        position: "topCenter"
                    });
                    job.forEach(r => {
                        r.value = "";
                    });
                })
                .catch(err => {
                    iziToast.error({
                        position: "topCenter",
                        message: err.message
                    });
                });
        }
    } else {
        iziToast.error({
            position: "topCenter",
            message: "Field Job name is empty or invalid!"
        });
    }
};

getJobs = () => {
    let output = "";
    let alljobs = document.querySelector("#alljobs") || null;
    axios
        .get("/jobs")
        .then(res => {
            res.data.forEach(j => {
                output += `
                      <div class="col-md-8 offset-md-2 mb-3">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="text-center h4 font-weight-bold">
                        ${j.name}
                    </div>
                </div>
                <div class="card-body">
                    <div class="font-weight-bold h5 text-left">
                        Requisite Skills and Background
                    </div>
                    <ul class="">
                        <li>${j.prereq1}</li>
                        <li>${j.prereq2}</li>
                        <li>${j.prereq3}</li>
                    </ul>
                </div>
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col-6 text-right">
                            <button class="btn btn-warning editjob"
                            id="ej${j.id}"
                            data-toggle="modal"
                            data-target="#editcarouselmodal"
                            >
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                        <div class="col-6 text-left">
                            <button class="btn btn-danger deletejob"
                            id="ed${j.id}"
                            >
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                `;
            });
            if (alljobs) {
                alljobs.innerHTML =
                    output ||
                    "   <div class='col-md-8 offset-md-2 mb-3'>No jobs to show</div>";
            }
            let editjob = document.querySelectorAll(".editjob") || null;
            if (editjob) {
                editjob.forEach(e => {
                    e.addEventListener("click", () => {
                        jobEdit(e.id.substring(2));
                        state.edit_id = e.id.substring(2);
                    });
                });
            }
            let deletejob = document.querySelectorAll(".deletejob") || null;
            if (deletejob) {
                deletejob.forEach(d => {
                    d.addEventListener("click", () => {
                        jobDelete(d.id.substring(2));
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

jobEdit = id => {
    axios
        .get(`/single/job/${id}`)
        .then(res => {
            $("#editjname").val(res.data.name);
            $("#editprereq1").val(res.data.prereq1);
            $("#editprereq2").val(res.data.prereq2);
            $("#editprereq3").val(res.data.prereq3);
        })
        .catch(err => {
            iziToast.error({
                message: err.message,
                position: "topCenter"
            });
        });
};

var editJob = document.querySelector("#editJobform") || null;
if (editJob) {
    editJob.addEventListener("submit", event => {
        event.preventDefault();
        jobUpdate();
    });
}

jobUpdate = () => {
    let name = document.querySelector("#editjname") || null;
    let editprereq1 = $("#editprereq1").val();
    let editprereq2 = $("#editprereq2").val();
    let editprereq3 = $("#editprereq3").val();
    let editdata = {
        editjname: name.value,
        editprereq1: editprereq1,
        editprereq2: editprereq2,
        editprereq3: editprereq3
    };
    if (name && name.value != "") {
        axios
            .put(`/single/job/${state.edit_id}`, editdata)
            .then(res => {
                $("#closejobeditmodal").click();
                $("#closejobeditmodal").click();
                iziToast.success({
                    position: "topCenter",
                    message: "Job updated successfully!"
                });
                getJobs();
            })
            .catch(err => {
                iziToast.error({
                    message: err.message,
                    position: "topCenter"
                });
            });
    } else {
        iziToast.error({
            message: "Field job name is empty or invalid!",
            position: "topCenter"
        });
    }
};

jobDelete = id => {
    axios
        .delete(`/delete/job/${id}`)
        .then(res => {
            iziToast.success({
                position: "topCenter",
                message: "Job deleted successfully!"
            });
            getJobs();
        })
        .catch(err => {
            iziToast.error({
                message: "Field job name is empty or invalid!",
                position: "topCenter"
            });
        });
};

getJobs();
