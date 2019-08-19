getMessages = () => {
    axios
        .get("/messages")
        .then(res => {
            console.table(res.data);
        })
        .catch(err => {
            console.log(err.message);
        });
};

getMessages();
setInterval(() => {
    getMessages();
}, 10000);
