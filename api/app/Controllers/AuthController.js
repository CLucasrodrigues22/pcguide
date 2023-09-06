const Auth = require("../Models/Auth");

const AuthController = {
    // register user
    register: async (req, res) => {
        try {
            return res.status(201).json({ msg: "End point ok!" });
        } catch (error) {
            console.log(error);
        }
    }
}

module.exports = AuthController;