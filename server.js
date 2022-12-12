const app = require("express");
const http = require("http").Server(app);
const io = require("socket.io")(http);
const port = 8001;

http.listen(port, (error) => {
    if (!error) {
        console.log("The server is up and running at port: " + port);
    } else {
        console.log("Error occured", error);
    }
});
