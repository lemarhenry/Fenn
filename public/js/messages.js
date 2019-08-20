getMessages = () => {
    axios
        .get("/messages")
        .then(res => {
            $("#totalmessage").html(res.data.length);
            let output = "";
            console.table(res.data);
            let seen = res.data.filter(s => !s.sent);
            let unseen = res.data.filter(s => s.sent);
            console.log(seen);
            $("#unseenmessages").html(seen.length);
            $("#seenmessages").html(unseen.length);
            res.data.forEach(m => {
                created_at = new Date(`${m.created_at}`);
                created = created_at.toString().slice(0, 24);
                output += `hello there`;
            });
            let allmessages = document.querySelector("#allmessages") || null;
            if (allmessages) {
                allmessages.innerHTML = output;
            }
        })
        .catch(err => {
            console.log(err.message);
        });
};

getMessages();
// setInterval(() => {
//     getMessages();
// }, 10000);
