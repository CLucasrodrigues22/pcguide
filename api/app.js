/* imports */
const jwt = require("jsonwebtoken");
const express = require("express");
const cors = require("cors");
const mongoose = require("mongoose");
require("dotenv").config();

const app = express();

app.use(cors());

app.use(express.json());

// Credencials db
const dbUser = process.env.DB_USER
const dbPassword = process.env.DB_PASS

mongoose.connect(`mongodb+srv://${dbUser}:${dbPassword}@pcguidecluster.hgyta7f.mongodb.net/?retryWrites=true&w=majority`).then(() => {
    // Router
    const routes = require("./routes/router");
    app.use("/api", routes);

    // Port
    app.listen(80);
}).catch((error) => console.log(error));
