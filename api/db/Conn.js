const mongoose = require("mongoose");

async function main() {
    try {
        mongoose.set("strictQuery");
        await mongoose.connect("mongodb+srv://clucasrodrigues22:9eYFAeCZlThpd66c@pcguidecluster.hgyta7f.mongodb.net/?retryWrites=true&w=majority");
    } catch (error) {
        console.log(`Error: ${error}`);
    }
}
module.exports = main;