const router = require("express").Router();

// Home Router
const homeRouter = require("./homeRouter");

router.use("/", homeRouter);

module.exports = router;