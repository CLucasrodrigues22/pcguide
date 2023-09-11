// imports
const express = require("express");
const cors = require("cors");
const cookieSession = require("cookie-session");
const conn = require("./app/Config/db.conifg");
const db = require("./app/Models");
const Role = db.role;

const app = express();

var corsOptions = {
    origin: "http://localhost"
};

app.use(cors(corsOptions));

// parse requests of content-type - application/json
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// parse requests of content-type - application/x-www-form-urlencoded
app.use(express.urlencoded({ extended: true }));

app.use(
    cookieSession({
        name: "pcguide-session",
        keys: ["COOKIE_SECRET"], // should use as secret environment variable
        httpOnly: true
    })
);

// simple route
app.get("/", (req, res) => {
    res.json({ message: "Welcome to pcguide application api." });
});

// set port, listen for requests
const PORT = process.env.PORT || 80;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}.`);
});

function initial() {
    Role.estimatedDocumentCount((err, count) => {
        if (!err && count === 0) {
            new Role({
                name: "user"
            }).save(err => {
                if (err) {
                    console.log("error", err);
                }

                console.log("added 'user' to roles collection");
            });

            new Role({
                name: "moderator"
            }).save(err => {
                if (err) {
                    console.log("error", err);
                }

                console.log("added 'moderator' to roles collection");
            });

            new Role({
                name: "admin"
            }).save(err => {
                if (err) {
                    console.log("error", err);
                }

                console.log("added 'admin' to roles collection");
            });
        }
    });
}

// routes
require("./routes/auth.routes")(app);
require('./routes/user.routes')(app);