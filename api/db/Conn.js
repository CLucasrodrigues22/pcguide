const mongoose = require("mongoose");

async function main() {
    try {
        mongoose.set("strictQuery");
        await mongoose.connect("mongodb+srv://clucasrodrigues22:9eYFAeCZlThpd66c@pcguidecluster.hgyta7f.mongodb.net/?retryWrites=true&w=majority");
        console.log('Banco ok');
    } catch (error) {
        console.log(`Erro: ${error}`);
    }
}
module.exports = main;