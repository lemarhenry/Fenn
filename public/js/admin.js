var state = {
    edit_id: null,
    img: null
};

let carouselin = document.getElementById("carouselimage");
let carouselout = $("#carouselout");

carouselin.addEventListener("change", event => {
    carouselout.val(event.target.files[0].name);
    TemPic(event.target, "tempcarouselimage");
});

mediaQuery = () => {
    let abh = $("#ttcard");
    if (screen.width < 654) {
        abh.addClass("mb-4");
    } else {
        abh.removeClass("mb-4");
    }
};

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
                    message: err,
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
                        >Edit</a>
                        </div>
                        <div class="col-6 text-left">
                            <a
                             href="#!"
                            class="btn btn-danger text-center deleteTestimonial "
                            title="delete ${res.id}"
                            id="dt${res.id}">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                `;
                des_rate = "";
            });
            if (viewtestimonail) {
                viewtestimonail.innerHTML = output;
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
                message: err
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
                message: err
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
                message: err
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
                    message: err
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
            iziToast.error({
                message: err,
                position: "topCenter"
            });
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
                    message: err
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
                            iziToast.success({
                                message: "Password updated successfully!",
                                position: "topCenter"
                            });
                        })
                        .catch(err => {
                            iziToast.error({
                                message: err,
                                position: "topCenter"
                            });
                        });
                }
            })
            .catch(err => {
                iziToast.error({
                    message: err,
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

TemPic = (img, id, abort = false) => {
    var reader = new FileReader();
    reader.onload = function(e) {
        $(`#${id}`).attr("src", e.target.result);
    };
    if (img.files[0].size < 2000000.0) {
        state.img = img;
        reader.readAsDataURL(img.files[0]);
    } else {
        iziToast.error({
            position: "topCenter",
            message: `File ${
                img.files[0].name
            } is greater than 2mb. Please choose a smaller files.`
        });
    }
    if (abort) {
        reader.abort();
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
    if (caption.length > 0) {
        fd.append("caption", caption.value);
    }
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
            console.log(err);
        });
};

// Function calls
getTestimonials();
AdminData();
