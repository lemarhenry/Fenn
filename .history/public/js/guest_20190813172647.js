validateEmail = email => {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};
$("#sendmsg").on("submit", event => sendMessage(event));

mediaQuery = () => {
    let abh = $("#aboutheadertext");
    if (screen.width < 654) {
        abh.addClass("text-center");
    } else {
        abh.removeClass("text-center");
    }
};

sendMessage = e => {
    e.preventDefault();
    let name = $("#formname").val();
    let email = $("#formemail").val();
    let subject = $("#formSubject").val();
    let body = $("#formtext").val();
    if (name.length < 3) {
        $("#errorname").html("Error, invalid name .");
    } else if (!validateEmail(email)) {
        $("#erroremail").html("Error, Invalid email.");
    } else if (subject.length < 3) {
        $("#errorsubject").html("Error,invalid subject.");
    } else if (body.length < 3) {
        $("#errorbody").html("Error,invalid body.");
    } else {
        let fd = new FormData();
        fd.append("name", name);
        fd.append("email", email);
        fd.append("subject", subject);
        fd.append("body", body);
        axios
            .post("/contact", fd)
            .then(res => {
                iziToast.success({
                    position: "topCenter",
                    message: "Message sent."
                });
                $("#formname").val("");
                $("#formemail").val("");
                $("#formSubject").val("");
                $("#formtext").val("");
                $("#errorname").html("");
                $("#erroremail").html("");
                $("#errorsubject").html("");
                $("#errorbody").html("");
            })
            .catch(err =>
                iziToast.error({
                    position: "topCenter",
                    message: err
                })
            );
    }
};

Carousel = () => {
    let images = document.querySelector("#carouselImages") || null;
    let output = null;
    axios
        .get("/carousel")
        .then(res => {
            res.data.forEach((value, index) => {
                let active = index == 0 ? "active" : "";
                output += `<div class="carousel-item ${active}">
                <img
                    class="d-block w-100 h-75"
                    src="/storage/carousel/${value.image}"
                    alt="${value.image}"
                />
            </div>`;
            });
            if (images) {
                images.innerHTML = output;
            }
        })
        .catch(err => {
            iziToast.error({
                position: "topCenter",
                message: err
            });
        });
};

testimonials = () => {
    let testimonial = document.querySelector("#testimonial") || null;
    let output = "";
    axios
        .get("/testimonial")
        .then(res => {
            res.data.forEach(res => {
                let des_rate = "";
                for (let i = 0; i < res.rating; i++) {
                    des_rate += "<i class='fas fa-star'> </i>";
                }
                output += `<div class="col-md-4 mb-md-0 mb-5">
                <div class="testimonial">
                    <div class="avatar mx-auto">
                        <img
                            src="./storage/testimonial/${res.image}"
                            alt="${res.client}"
                            class="img-thumbnail img-fluid rounded-circle"
                            style="width:80%"
                        />
                    </div>
                    <!--Content-->
                    <h4 class="font-weight-bold dark-grey-text mt-4">
                       ${res.client}
                    </h4>
                    <h6 class="font-weight-bold blue-text my-3">
                        ${res.fdist}
                    </h6>
                    <p class="font-weight-normal dark-grey-text">
                        <i class="fas fa-quote-left pr-2"></i>
                        ${res.testimonial}
                    </p>
                    <div class="orange-text">
                    ${des_rate}
                    </div>
                </div>
            </div>`;
            });
            if (testimonial) {
                testimonial.innerHTML = output;
            }
        })
        .catch(err =>
            iziToast({
                position: "topCenter",
                message: err
            })
        );
};
//image box
baguetteBox.run(".tz-gallery");

// function calls
Carousel();
testimonials();

// Media query
window.addEventListener("resize", () => mediaQuery());
