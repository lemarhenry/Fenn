var digifyform = document.querySelector("#digifyform") || null;
if (digifyform) {
    digifyform.addEventListener("submit", event => {
        event.preventDefault();
        updateDigify();
    });
}

updateDigify = () => {
    let fd = new FormData();
    let pass = false;
    let digify = document.querySelectorAll(".digify") || null;
    if (digify) {
        digify.forEach(d => {
            if (d.value == "") {
                pass = false;
                iziToast.error({
                    message: `${d.name} field is required .`,
                    position: "topCenter"
                });
                return;
            } else {
                pass = true;
                fd.append(d.id, d.value);
            }
        });
        if (pass) {
            axios
                .post("/update/digify", fd)
                .then(res => {
                    iziToast.success({
                        message: "Digify prices updated successfully!",
                        position: "topCenter"
                    });
                    getDigify();
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

getDigify = () => {
    axios
        .get("/digify")
        .then(res => {
            if (res.data.length == 0) {
                $("#digifysubmitbtn").html("<i class='fa fa-plus'></i>");
                $("#digifysubmitbtn").addClass("btn-success");
                $("#digifysubmitbtn").removeClass("btn-warning");
            } else {
                $("#digifysubmitbtn").html("<i class='fa fa-edit'></i>");
                $("#digifysubmitbtn").removeClass("btn-success");
                $("#digifysubmitbtn").addClass("btn-warning");
            }
            $("#btname").html(res.data.basic);
            $("#basic").val(res.data.basic);
            $("#basicprice").val(res.data.bprice);

            $("#ptname").html(res.data.premium);
            $("#premium").val(res.data.premium);
            $("#premiumprice").val(res.data.pprice);

            $("#etname").html(res.data.elite);
            $("#elite").val(res.data.elite);
            $("#eliteprice").val(res.data.eprice);
        })
        .catch(err => {
            iziToast.error({
                message: err.message,
                position: "topCenter"
            });
        });
};

getDigify();

var danform = document.querySelector("#danform") || null;
if (danform) {
    danform.addEventListener("submit", event => {
        event.preventDefault();
        updateDan();
    });
}

updateDan = () => {
    let fd = new FormData();
    let dan = document.querySelectorAll(".dan") || null;
    let pass = false;
    if (dan) {
        dan.forEach(d => {
            if (d.value == "") {
                pass = false;
                iziToast.error({
                    message: `${d.name} field is required .`,
                    position: "topCenter"
                });
            } else {
                pass = true;
                fd.append(d.id, d.value);
            }
        });
        if (pass) {
            axios
                .post("/update/dan", fd)
                .then(res => {
                    iziToast.success({
                        message: "Dan prices updated successfully!",
                        position: "topCenter"
                    });
                    getDan();
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

getDan = () => {
    axios
        .get("/dan")
        .then(res => {
            if (res.data.length == 0) {
                $("#dansubmitbtn").html("<i class='fa fa-plus'></i>");
                $("#dansubmitbtn").addClass("btn-success");
                $("#dansubmitbtn").removeClass("btn-warning");
            } else {
                $("#dansubmitbtn").html("<i class='fa fa-edit'></i>");
                $("#dansubmitbtn").removeClass("btn-success");
                $("#dansubmitbtn").addClass("btn-warning");
            }
            $("#dbtname").html(res.data.basic);
            $("#dbasic").val(res.data.basic);
            $("#dbasicprice").val(res.data.bprice);

            $("#dptname").html(res.data.premium);
            $("#dpremium").val(res.data.premium);
            $("#dpremiumprice").val(res.data.pprice);

            $("#detname").html(res.data.elite);
            $("#delite").val(res.data.elite);
            $("#deliteprice").val(res.data.eprice);
        })
        .catch(err => {
            iziToast.error({
                message: err.message,
                position: "topCenter"
            });
        });
};

getDan();
