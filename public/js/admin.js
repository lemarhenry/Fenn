var state = {
    image: null
};

var test = document.querySelector("#testimonialImage") || null;

if (test) {
    test.addEventListener(
        "change",
        event => (state.image = event.target || null)
    );
}

document
    .querySelector("#createTestimonial")
    .addEventListener("submit", event => {
        createTestimonial(event);
    });

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
                message: `Field ${val.id} is empty or invalid. `
            });
        } else {
            pass = true;
            fd.append(val.id, val.value);
        }
    });
    if (state.image) {
        fd.append("image", state.image.files[0]);
    }
    if (pass) {
        axios
            .post("/create/testimonial", fd)
            .then(res => {
                iziToast.success({
                    title: "Sucsess",
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
