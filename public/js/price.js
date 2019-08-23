var digifyform = document.querySelector("#digifyform") || null;
if (digifyform) {
    digifyform.addEventListener("submit", event => {
        event.preventDefault();
        updateDigify();
    });
}

updateDigify = () => {
    let fd = new FormData();
    let digify = document.querySelectorAll(".digify") || null;
    if (digify) {
        digify.forEach(d => {
            fd.append(d.id, d.value);
        });
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
};

getDigify = () => {
    axios.get("/digify").then(res => {
        console.table(res.data);
        $("#btname").html(res.data.basic);
        $("#basic").val(res.data.basic);
        $("#basicprice").val(res.data.bprice);

        $("#ptname").html(res.data.premium);
        $("#premium").val(res.data.premium);
        $("#premiumprice").val(res.data.pprice);

        $("#etname").html(res.data.elite);
        $("#elite").val(res.data.elite);
        $("#eliteprice").val(res.data.eprice);
    });
};

getDigify();
