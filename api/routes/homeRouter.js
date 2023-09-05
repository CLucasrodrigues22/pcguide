const router = require("express").Router();

const homeController = require("../app/Controllers/HomeController");

// route get home info
// router get service by id
router.route("/home").get((req, res) => {
    homeController.getHome(req, res);
});

module.exports = router;