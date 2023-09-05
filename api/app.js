/* imports */
const jwt = require("jsonwebtoken");
const express = require("express");
const cors = require("cors");
require("dotenv").config();

const app = express();

app.use(cors());

app.use(express.json());

const conn = require("./db/Conn");

conn();

//Router
const routes = require("./routes/router");
app.use("/api", routes);

app.listen(80);
