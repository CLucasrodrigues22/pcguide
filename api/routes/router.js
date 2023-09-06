const router = require("express").Router();

// Home Route
const homeRouter = require("./homeRouter");
router.use("/", homeRouter);

// Register Route
const registerRouter = require("./authRouter");
router.use("/", registerRouter);

module.exports = router;