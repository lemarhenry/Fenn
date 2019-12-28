var state = {
    edit_id: null,
    img: null,
    port_id: null,
    msg_id: null
};

let siteSections = [
    { value: 1, site: "FennTech Home" },
    { value: 2, site: "FennTech Corporate" },
    { value: 3, site: "FennTech Networking" },
    { value: 4, site: "FennTech Website" }
];

var section = document.querySelector("#section") || null;

var populateCarouselDropDown = (IsSelected = 1) => {
    let output = "";
    siteSections.forEach(s => {
        let selected = Number(s.value) == IsSelected ? "selected" : "";
        output += `<option value="${s.value}" ${selected}>${s.site}</option>`;
    });
    if (section) {
        section.innerHTML = output;
    }
};

let carouselin = document.getElementById("carouselimage") || null;
let carouselout = $("#carouselout") || null;
let editcarouselimagein =
    document.querySelector("#editcarouselimagein") || null;
let editcarouselout = $("#editcarouselout") || null;

if (carouselin) {
    carouselin.addEventListener("change", event => {
        carouselout.val(event.target.files[0].name);
        TemPic(event.target, "tempcarouselimage");
    });
}

if (editcarouselimagein) {
    editcarouselimagein.addEventListener("change", event => {
        editcarouselout.val(event.target.files[0].name);
        TemPic(event.target, "editcarouselimage");
    });
}

mediaQuery = () => {
    let abh = $("#ttcard");
    if (screen.width < 654) {
        abh.addClass("mb-4");
    } else {
        abh.removeClass("mb-4");
    }
};

onLine = () => {
    if (!navigator.onLine) {
        iziToast.error({
            position: "topCenter",
            message:
                "You are currently offline, please get some internet access for this site to work."
        });
    }
};

setInterval(() => {
    onLine();
}, 30000);

window.addEventListener("resize", () => mediaQuery());

if (screen.width < 654) {
    mediaQuery();
}

var updatepasswordmodal =
    document.querySelector("#updatepasswordmodal") || null;
if (updatepasswordmodal) {
    updatepasswordmodal.addEventListener("click", () => {
        adminUpdatepassword();
    });
}
var updateprofile = document.querySelector("#updateprofile") || null;

if (updateprofile) {
    updateprofile.addEventListener("submit", event => {
        event.preventDefault();
        adminUpdate();
    });
}
var addtest = document.querySelector("#createTestimonial") || null;

if (addtest) {
    addtest.addEventListener("submit", event => {
        createTestimonial(event);
    });
}
var updateTestimonial = document.querySelector("#updateTestimonial") || null;

if (updateTestimonial) {
    updateTestimonial.addEventListener("click", () => {
        updateTest();
    });
}

validateEmail = email => {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

createTestimonial = e => {
    e.preventDefault();
    let pass = false;
    let fd = new FormData();
    document.querySelectorAll(".testimonial").forEach(val => {
        if (val.value == "") {
            pass = false;
            iziToast.error({
                title: "Error",
                position: "topCenter",
                message: `Field ${val.name} is empty or invalid!`
            });
        } else {
            pass = true;
            fd.append(val.id, val.value);
        }
    });
    if (pass) {
        axios
            .post("/create/testimonial", fd)
            .then(res => {
                iziToast.success({
                    message: "Testimonial added",
                    position: "topCenter"
                });
                document.querySelectorAll(".testimonial").forEach(val => {
                    val.value = "";
                });
            })
            .catch(err => {
                iziToast.error({
                    message: err.message,
                    position: "topCenter"
                });
            });
    }
};

getTestimonials = () => {
    let output = "";
    let des_rate = "";
    let viewtestimonail = document.querySelector("#viewTestimonial") || null;
    let totalTestimonial = document.querySelector("#totalTestimonial") || null;

    axios
        .get("/testimonial")
        .then(res => {
            if (totalTestimonial) {
                totalTestimonial.innerHTML = res.data.length;
            }
            let len = res.data.length;
            res.data.forEach(res => {
                for (let i = 0; i < res.rating; i++) {
                    des_rate += "<i class='fas fa-star'></i>";
                }
                output += `
           <div class="col-md-8 offset-md-2 mb-3">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="text-center h3">
                        <span>
                            ${res.client}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center text-primary font-weight-bold ">
                        "${res.fdist}"
                    </div>
                    <p class="text-center">
                        <span>${res.testimonial}</span><br>
                        <span class="orange-text">${des_rate}</span>
                    </p>
                </div>
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col-6 text-right">
                        <a href="#!"
                        class="btn btn-warning text-white edittestimonail"
                        data-toggle="modal"
                        data-target="#edittestimonialmodal"
                        id="ed${res.id}"
                        ><i class="fa fa-edit"></i></a>
                        </div>
                        <div class="col-6 text-left">
                            <a
                             href="#!"
                            class="btn btn-danger text-center deleteTestimonial "
                            id="dt${res.id}"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                `;
                des_rate = "";
            });
            if (viewtestimonail) {
                viewtestimonail.innerHTML =
                    len > 0
                        ? output
                        : "<div class='col-12 text-center'>No testimonial to show.</div>";
            }

            let del = document.querySelectorAll(".deleteTestimonial") || null;
            if (del) {
                del.forEach(d => {
                    d.addEventListener("click", () => {
                        DeleteTestimonial(d.id.substring(2));
                    });
                });
            }
            let edittest =
                document.querySelectorAll(".edittestimonail") || null;
            if (edittest) {
                edittest.forEach(edit => {
                    edit.addEventListener("click", () => {
                        state.edit_id = edit.id.substring(2);
                        peditModal(edit.id.substring(2));
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

DeleteTestimonial = id => {
    axios
        .delete(`/delete/testimonial/${id}`)
        .then(res => {
            iziToast.success({
                message: "Testimonial removed successfully!",
                position: "topCenter"
            });
            getTestimonials();
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

peditModal = id => {
    axios
        .get(`/single/testimonial/${id}`)
        .then(res => {
            $("#edclient").val(res.data.client);
            $("#edsmdes").val(res.data.fdist);
            $("#edrating").val(res.data.rating);
            $("#edtest").val(res.data.testimonial);
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err.message
            });
        });
};

updateTest = () => {
    let fd = new FormData();
    let pass = false;
    document.querySelectorAll(".edtestimonial").forEach(ed => {
        if (ed.value == "") {
            pass = false;
            iziToast.error({
                message: `Field ${ed.name} is empty or invalid!`,
                position: "topCenter"
            });
        } else {
            pass = true;
        }
    });
    if (pass) {
        axios
            .put(`/single/testimonial/${state.edit_id}`, {
                edrating: $("#edrating").val(),
                edsmdes: $("#edsmdes").val(),
                edclient: $("#edclient").val(),
                edtest: $("#edtest").val()
            })
            .then(res => {
                $("#closeeditmodal").click();
                $("#closeeditmodal").click();
                getTestimonials();
                iziToast.success({
                    position: "topCenter",
                    message: "Testimonial updated successfully!"
                });
            })
            .catch(err =>
                iziToast({
                    position: "topCenter",
                    message: err.message
                })
            );
    }
};

AdminData = () => {
    axios
        .get("/admin/data")
        .then(res => {
            $("#profilename").val(res.data.name);
            $("#profilemail").val(res.data.email);
            $("#profilecardname").html(res.data.name);
            $("#profilecardemail").html(res.data.email);
        })
        .catch(err => {
            throw err;
        });
};

adminUpdate = () => {
    let pass = false;
    document.querySelectorAll(".adminupdate").forEach(up => {
        if (up.value == "") {
            pass = false;
            iziToast.error({
                position: "topCenter",
                message: `Field ${up.name} is invalid or empty!`
            });
        } else {
            pass = true;
        }
    });
    if (pass && validateEmail($("#profilemail").val())) {
        axios
            .put("/admin/update", {
                Name: $("#profilename").val(),
                Email: $("#profilemail").val()
            })
            .then(res => {
                if (res.status == 403) {
                    iziToast.error({
                        position: "topCenter",
                        message: "Error, Email already taken!"
                    });
                } else {
                    iziToast.success({
                        position: "topCenter",
                        message: "Account updated successfully!"
                    });
                    AdminData();
                }
            })
            .catch(err => {
                iziToast.error({
                    position: "topCenter",
                    message: err.message
                });
            });
    } else {
        iziToast.error({
            message: "Invalid email address",
            position: "topCenter"
        });
    }
};

adminUpdatepassword = () => {
    let oldpassword = $("#Oldpassword").val();
    let newpassword = $("#Newpassword").val();
    let confirmpassword = $("#confirmpassword").val();

    if (
        oldpassword.length >= 6 &&
        confirmpassword.length >= 6 &&
        newpassword.length >= 6 &&
        newpassword == confirmpassword
    ) {
        axios
            .post("/admin/password/check", {
                password: oldpassword
            })
            .then(res => {
                if (res.status == 403) {
                    iziToast.error({
                        message:
                            "The field Old password does not match the current password.",
                        position: "topCenter"
                    });
                } else {
                    axios
                        .put("/admin/update/password", {
                            password: newpassword
                        })
                        .then(res => {
                            $("#closeupdatepasswordmodal").click();
                            $("#closeupdatepasswordmodal").click();
                            $("#Oldpassword").val("");
                            $("#Newpassword").val("");
                            $("#confirmpassword").val("");
                            iziToast.success({
                                message: "Password updated successfully!",
                                position: "topCenter"
                            });
                        })
                        .catch(err => {
                            iziToast.error({
                                message: err.message,
                                position: "topCenter"
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
    } else {
        iziToast.error({
            message:
                "Either password does not match the confirm password or a field has invalid data!",
            position: "topCenter"
        });
    }
};

TemPic = (img, id) => {
    var reader = new FileReader();
    reader.onload = function(e) {
        $(`#${id}`).attr("src", e.target.result);
    };
    if (img.files[0].size < 2000000.0) {
        state.img = img || null;
        reader.readAsDataURL(img.files[0]);
    } else {
        iziToast.error({
            position: "topCenter",
            message: `File ${img.files[0].name} is greater than 2mb. Please choose a smaller files.`
        });
    }
};

var submitcarousel = document.querySelector("#submitcarousel");
if (submitcarousel) {
    submitcarousel.addEventListener("click", () => {
        addCarouselimage();
    });
}

addCarouselimage = () => {
    let fd = new FormData();
    let caption = document.querySelector("#imagecaption");
    if (state.img == null) {
        iziToast.error({
            message: "An image is required!",
            position: "topCenter"
        });
    } else {
        if (state.img.files[0].size < 2000000.0) {
            fd.append("caption", caption.value);
            fd.append("section", section.value);
            fd.append("img", state.img.files[0]);
            axios
                .post("/create/carousel", fd)
                .then(res => {
                    iziToast.success({
                        position: "topCenter",
                        message: "Carousel image added successfully!"
                    });
                    carouselout.val("");
                    caption.value = "";
                    $("#tempcarouselimage").attr("style", "display:none");
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

getCarouselIMages = () => {
    let allcarouselimage = document.querySelector("#allcarouselimage") || null;
    let output = "";
    axios
        .get("/carousel")
        .then(res => {
            $("#totalcarousel").html(res.data.length);
            let len = res.data.length;
            res.data.forEach(ca => {
                let body =
                    ca.caption.length > 0
                        ? `<div class="card-body">
                    <div class="text-center">
                     ${ca.caption}
                    </div>
                </div>`
                        : "";
                output += `<div class="col-md-8 offset-md-2 mb-4">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="text-center">
                        <img
                            src="/storage/carousel/${ca.image}"
                            alt=""
                            srcset=""
                            style="width:60%"
                        />
                    </div>
                </div>
                ${body}
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col-6 text-right">
                            <button class="btn btn-warning editcarousel"
                            id="ce${ca.id}"
                            title="Edit ${ca.id}"
                            data-toggle="modal"
                            data-target="#editcarouselmodal"
                            >
                                <i class="fa fa-edit"></i>
                            </button>
                        </div>
                        <div class="col-6 text-left">
                            <button
                            class="btn btn-danger deletecarousel"
                            title="Delete ${ca.id}"
                            id="dc${ca.id}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
            });
            if (allcarouselimage) {
                allcarouselimage.innerHTML =
                    len > 0
                        ? output
                        : "<div class='col-12 text-center'>No images to show.</div>";
                document.querySelectorAll(".deletecarousel").forEach(ca => {
                    ca.addEventListener("click", () => {
                        deleteCarouselImage(ca.id.substring(2));
                    });
                });
                document.querySelectorAll(".editcarousel").forEach(ca => {
                    ca.addEventListener("click", () => {
                        state.edit_id = ca.id.substring(2);
                        pcarData(ca.id.substring(2));
                    });
                });
            }
        })
        .catch(err => {
            throw err;
        });
};

deleteCarouselImage = id => {
    axios
        .delete(`/delete/carousel/${id}`)
        .then(res => {
            iziToast.success({
                message: "Carousel image removed successfully!",
                position: "topCenter"
            });
            getCarouselIMages();
        })
        .catch(err => {
            throw err;
        });
};

pcarData = id => {
    axios
        .get(`/single/carousel/${id}`)
        .then(res => {
            $("#editcarouselimage").attr(
                "src",
                `/storage/carousel/${res.data.image}`
            );
            $("#editimagecaption").val(res.data.caption);
            populateCarouselDropDown(res.data.section);
        })
        .catch(err => {
            throw err;
        });
};

var updatecarousel = document.querySelector("#updateCarousel") || null;

if (updatecarousel) {
    updatecarousel.addEventListener("click", () => {
        updateCarousel();
    });
}

updateCarousel = () => {
    let caption = $("#editimagecaption").val();
    let fd = new FormData();
    fd.append("img", state.img ? state.img.files[0] : null);
    fd.append("caption", caption);
    fd.append("section", section.value);
    axios
        .post(`/single/carousel/${state.edit_id}`, fd)
        .then(res => {
            iziToast.success({
                message: "Carousel entry updated successfully!",
                position: "topCenter"
            });
            getCarouselIMages();
            $("#closecarouselmodal").click();
            $("#closecarouselmodal").click();
        })
        .catch(err => {
            throw err;
        });
};

// Function calls
getTestimonials();
getCarouselIMages();
AdminData();
populateCarouselDropDown();
