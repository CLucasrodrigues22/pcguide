const router = require("express").Router();

const authController = require("../app/Controllers/AuthController");

// route get home info
router.route("/register").post((req, res) => {
    authController.register(req, res);
});

module.exports = router;