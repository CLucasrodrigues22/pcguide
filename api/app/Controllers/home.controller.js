const HomeController = {
    // get home info
    getHome: async (req, res) => {
        try {
            const data = "Dados home";
            res.status(200).json(data);
        } catch (error) {
            console.log(`Erro: ${error}`);
        }
    }
}

module.exports = HomeController;