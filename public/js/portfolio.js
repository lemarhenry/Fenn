var portfolioimage = document.querySelector("#portfolioimage") || null;
if (portfolioimage) {
    portfolioimage.addEventListener("change", event => {
        document.querySelector("#portfolioout").value =
            event.target.files[0].name;
        TemPic(event.target, "tempportfolioimage");
    });
}

var createportfolio = document.querySelector("#createportfolio") || null;
if (createportfolio) {
    createportfolio.addEventListener("submit", event => {
        event.preventDefault();
        createportfolio();
    });
}

createportfolio = () => {
    let pass = false;
    let fd = new FormData();
    document.querySelectorAll(".portfolio").forEach((p, index) => {
        if (index < 2) {
            if (p.value == "") {
                pass = false;
                iziToast.error({
                    position: "topCenter",
                    message: `Error field portfolio ${
                        p.name
                    } is invalid or empty!`
                });
            } else {
                pass = true;
                fd.append(p.name, p.value);
            }
        }
    });
    fd.append("img", state.img.files[0]);
    if (pass) {
        axios
            .post("/create/portfolio", fd)
            .then(res => {
                iziToast.success({
                    message: "Portfolio created successfully!",
                    position: "topCenter"
                });
                getPortfolios();
                document.querySelectorAll(".portfolio").forEach(p => {
                    p.value = "";
                });
                document.querySelector("#portfolioout").value = "";
                document.querySelector("#portfolioimage").value = "";
                $("#tempportfolioimage").attr("src", "");
            })
            .catch(err => {
                iziToast.error({
                    position: "topCenter",
                    message: err.message
                });
            });
    }
};

getPortfolios = () => {
    axios
        .get("/portfolio")
        .then(res => {
            let output = "";
            let totalportfolio =
                document.querySelector("#totalportfolio") || null;
            if (totalportfolio) {
                totalportfolio.innerHTML = res.data.length;
            }
            res.data.forEach(p => {
                output += `   <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <img
                        src="/storage/portfolio/${p.img}"
                        alt=""
                        style="width: 100%"
                    />
                    <div class="text-center font-weight-bold h4 mt-1">
                       ${p.name}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4 text-left">
                            <button class="btn btn-warning btn-sm editportfolio"
                            id="edp${p.id}"
                            >
                           <i class="fas fa-edit"></i>
                            </button>
                        </div>
                           <div class="col-4 text-center">
                            <button class="btn btn-success btn-sm addportimg"
                               id="ped${p.id}"
                            >
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn btn-danger btn-sm deleteportimg" id="pdd${
                                p.id
                            }">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
            });
            let portfolios = document.querySelector("#portfolios") || null;
            if (portfolios) {
                portfolios.innerHTML = output;
            }
            let addportimg = document.querySelectorAll(".addportimg") || null;
            if (addportimg) {
                addportimg.forEach(a => {
                    a.addEventListener("click", () => {
                        $("#openaddportimg").click();
                        state.edit_id = a.id.substring(3);
                    });
                });
            }
            let deleteportimg =
                document.querySelectorAll(".deleteportimg") || null;
            if (deleteportimg) {
                deleteportimg.forEach(d => {
                    d.addEventListener("click", () => {
                        portImgdelete(d.id.substring(3));
                    });
                });
            }
            let editportfolio =
                document.querySelectorAll(".editportfolio") || null;
            if (editportfolio) {
                editportfolio.forEach(d => {
                    d.addEventListener("click", () => {
                        state.edit_id = d.id.substring(3);
                        pportData();
                        $("#openaddporteditimg").click();
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

var addportfolioimageedit =
    document.querySelector("#addportfolioimageedit") || null;
if (addportfolioimageedit) {
    addportfolioimageedit.addEventListener("change", event => {
        TemPic(event.target, "tempportimageedit");
        document.querySelector("#addportfoliooutedit").value =
            event.target.files[0].name;
    });
}

var updateportfolio = document.querySelector("#updateportfolioedit") || null;
if (updateportfolio) {
    updateportfolio.addEventListener("click", () => {
        UpdatePort();
    });
}

let addportfolioimage = document.querySelector("#addportfolioimage") || null;
if (addportfolioimage) {
    addportfolioimage.addEventListener("change", event => {
        TemPic(event.target, "tempportimage");
        document.querySelector("#addportfolioout").value =
            event.target.files[0].name;
    });
}

let saveportimg = document.querySelector("#saveportimg") || null;
if (saveportimg) {
    saveportimg.addEventListener("click", () => {
        portImg();
    });
}

portImg = () => {
    let fd = new FormData();
    fd.append("img", state.img.files[0]);
    axios
        .post(`/create/portimg/${state.edit_id}`, fd)
        .then(res => {
            iziToast.success({
                message: `Image add to portfolio ${
                    state.edit_id
                } successfully!`,
                position: "topCenter"
            });
            $("tempportimage").attr("src", "");
            document.querySelector("#addportfolioout").value = "";
            $("#closeportimgmodal").click();
            $("#closeportimgmodal").click();
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

portImgdelete = id => {
    axios
        .delete(`/delete/portfolio/${id}`)
        .then(res => {
            getPortfolios();
            iziToast.success({
                message: "Portfolio removed successfully!",
                position: "topCenter"
            });
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

pportData = () => {
    axios
        .get(`/single/portfolio/${state.edit_id}`)
        .then(res => {
            $("#tempportimageedit").attr(
                "src",
                `/storage/portfolio/${res.data.img}`
            );
            $("#portnameedit").val(res.data.name);
            $("#portdiscriptionedit").val(res.data.description);
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

UpdatePort = () => {
    let pass = false;
    let fd = new FormData();
    document.querySelectorAll(".portfolioedit").forEach(u => {
        if (u.value == "") {
            pass = false;
            iziToast.error({
                position: "topCenter",
                message: `Error field portfolio ${u.name} is invalid or empty!`
            });
        } else {
            pass = true;
            fd.append(u.name, u.value);
        }
    });
    if (state.img) {
        fd.append("img", state.img.files[0]);
    }
    if (pass) {
        axios
            .post(`/single/portfolio/${state.edit_id}`, fd)
            .then(res => {
                iziToast.success({
                    message: "Portfolio updated successfully!",
                    position: "topCenter"
                });
                $("#closeportedit").click();
                $("#closeportedit").click();
                getPortfolios();
            })
            .catch(err => {
                iziToast.error({
                    position: "topCenter",
                    message: err.message
                });
            });
    }
};

viewPortfolio = () => {
    axios.get("/portfolio").then(res => {
        let output = "";
        res.data.forEach(p => {
            let populate = "";
            axios
                .get(`/portfolio/images/${p.id}`)
                .then(res => {
                    localStorage.setItem(
                        `port${p.id}`,
                        JSON.stringify(res.data)
                    );
                })
                .catch(err => {
                    console.log(err.message);
                });
            let port = JSON.parse(localStorage.getItem(`port${p.id}`)) || null;
            if (port) {
                port.forEach((r, i) => {
                    populate += `
                <div class="col-sm-6 mb-2">
                <div class="card classportfolioimage" id="cpi${r.id}"
                data-toggle="modal"
                data-target="#portfoliomodal">
                                <div class="card-body">
                                    <div>
                                        <img
                                            src="/storage/${p.id}/${r.img}"
                                            alt=""
                                            srcset=""
                                            style="width: 100%"
                                        />
                                    </div>
                                </div>
                        </div>
                </div>
                `;
                });
            }
            output += `
            <div class="col-md-6 mb-2">
            <div class="card">
                <div class="card-header bg-white">
                    <div>
                        <img
                            src="/storage/portfolio/${p.img}"
                            alt=""
                            srcset=""
                            style="width: 100%"
                        />
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-1 mt-1 h3 font-weight-bold">
                        ${p.name}
                    </div>
                    <div>
                       ${p.description}
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <button
                        class="btn btn-success openportfolio"
                        data-toggle="collapse"
                        id="openportfolio${p.id}"
                        href="#collapse${p.id}"
                    >
                        Open
                    </button>
                </div>
            </div>
              <div
            id="collapse${p.id}"
            class="collapse"
             >
            <div class="row mt-2">
                ${populate}
                </div>
            </div>
        </div>
       `;
        });
        let portfolioandpopulation =
            document.querySelector("#portfolioandpopulation") || null;
        if (portfolioandpopulation) {
            portfolioandpopulation.innerHTML = output;
        }

        var classportfolioimage =
            document.querySelectorAll(".classportfolioimage") || null;
        if (classportfolioimage) {
            classportfolioimage.forEach((res, index) => {
                res.addEventListener("click", () => {
                    viewPortimage(res.id.substring(3));
                    state.port_id = res.id.substring(3);
                });
            });
        }

        var openportfolio = document.querySelectorAll(".openportfolio") || null;
        if (openportfolio) {
            openportfolio.forEach(o => {
                let bol = false;
                $(`#${o.id}`).on("click", () => {
                    let html = $(`#${o.id}`)
                        .html()
                        .trim();
                    if (html == "Open") {
                        $(`#${o.id}`).removeClass("btn-success");
                        $(`#${o.id}`).addClass("btn-warning");
                        $(`#${o.id}`).html("Close");
                    } else {
                        $(`#${o.id}`).removeClass("btn-warning");
                        $(`#${o.id}`).addClass("btn-success");
                        $(`#${o.id}`).html("Open");
                    }
                });
            });
        }
    });
};

deleteportfolioimg = document.querySelector("#deleteportfolioimg") || null;
if (deleteportfolioimg) {
    deleteportfolioimg.addEventListener("click", () => {
        deletePortimage();
    });
}

viewPortimage = id => {
    axios.get(`/portfolio/image/${id}`).then(res => {
        $("#viewportfolioimagemodal").attr(
            "src",
            `/storage/${res.data.port_id}/${res.data.img}`
        );
    });
};

deletePortimage = () => {
    axios
        .delete(`/delete/image/${state.port_id}`)
        .then(res => {
            iziToast.success({
                message: "Image successfully removed from this portfolio!",
                position: "topCenter"
            });
            viewPortfolio();
            // local storage caused this .
            setTimeout(() => {
                viewPortfolio();
            }, 300);
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

getPortfolios();
viewPortfolio();
// Damn local storage ...
setTimeout(() => {
    viewPortfolio();
}, 300);
