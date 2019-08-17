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
                console.log(index);
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
                        $("#openaddporteditimg").click();
                    });
                });
            }
        })
        .catch(err => {
            // openaddporteditimg;
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

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
        .catch(res => {});
};

getPortfolios();
