const mongoose = require("mongoose");
require("dotenv").config();


// Credencials db
const dbUser = process.env.DB_USER
const dbPassword = process.env.DB_PASS

async function main() {
    try {
        mongoose.set("strictQuery");
        await mongoose.connect(`mongodb+srv://${dbUser}:${dbPassword}@pcguidecluster.hgyta7f.mongodb.net/?retryWrites=true&w=majority`, {
            useNewUrlParser: true,
            useUnifiedTopology: true
        });
    } catch (error) {
        console.log(`Erro: ${error}`);
    }
}
module.exports = main;