const db = require("../Models");
const ROLES = db.ROLES;

checkDuplicateUsernameOrEmail = async (req, res, next) => {
    try {
        // Username
        const userByUsername = await db.user.findOne({ username: req.body.username });

        if (userByUsername) {
            return res.status(400).send({ message: "Failed! Username is already in use!" });
        }

        // Email
        const userByEmail = await db.user.findOne({ email: req.body.email });

        if (userByEmail) {
            return res.status(400).send({ message: "Failed! Email is already in use!" });
        }

        next();
    } catch (error) {
        res.status(500).send({ message: error.message || "An error occurred while checking for duplicate username or email." });
    }
};


checkRolesExisted = (req, res, next) => {
    if (req.body.roles) {
        for (let i = 0; i < req.body.roles.length; i++) {
            if (!ROLES.includes(req.body.roles[i])) {
                res.status(400).send({
                    message: `Failed! Role ${req.body.roles[i]} does not exist!`
                });
                return;
            }
        }
    }

    next();
};

const verifySignUp = {
    checkDuplicateUsernameOrEmail,
    checkRolesExisted
};

module.exports = verifySignUp;