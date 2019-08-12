mediaQuery = () => {
    let c1 = $("#c1");
    let c2 = $("#c2");
    let c3 = $("#c3");
    let c4 = $("#c4");
    if (screen.width < 654) {
        c1.addClass("col-12 pr-3");
        c1.removeClass("col-6");
        c2.addClass("col-12");
        c2.removeClass("col-6");
        c3.addClass("col-12 pr-3");
        c3.removeClass("col-6");
        c4.addClass("col-12");
        c4.removeClass("col-6");
    } else {
        c1.removeClass("col-12 pr-3");
        c1.addClass("col-6");
        c2.removeClass("col-12");
        c2.addClass("col-6");
        c3.removeClass("col-12 pr-3");
        c3.addClass("col-6");
        c4.removeClass("col-12");
        c4.addClass("col-6");
    }
};

window.addEventListener("resize", () => mediaQuery());
