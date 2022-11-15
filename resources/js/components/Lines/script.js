import linesSlugs from "../../constants/lines-slugs";
export default {
    data() {
        return {
            lines: [
                {
                    name: "Scheer",
                    about: "Desde 1976 levando a cultura do churrasco para o mundo",
                    slug: linesSlugs.SCHEER,
                },
                {
                    name: "Quatrun",
                    about: "Inverno gaúcho com conforto europeu",
                    slug: linesSlugs.QUATRUN,
                },
                {
                    name: "SG - Facas Artesanais",
                    about: "As melhores facas artesanais",
                    slug: linesSlugs.SG_FACAS,
                },
                {
                    name: "Chopeiras Eltz",
                    about: "O melhor do chopp começa aqui",
                    slug: linesSlugs.ELTZ,
                },
                {
                    name: "Guindani Fogões",
                    about: "Qualidade que acende a confiança",
                    slug: linesSlugs.GUINDANI,
                },
            ],
        };
    },
};
