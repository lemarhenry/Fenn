var state = {
    edit_id: null
};

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
                        <div class="col-6">
                            <a
                             href="#!"
                            class="btn btn-danger text-center deleteTestimonial"
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

// Function calls
getTestimonials();
