import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";

export default {
    data() {
        return {
            partners: [
                {
                    name: "Scheer Churrasqueiras",
                    logo:
                        window.location.origin +
                        "/assets/images/logo-black-scheer.png",
                    site: "https://www.scheer.com.br",
                },
                {
                    name: "Facas Artesanais",
                    logo:
                        window.location.origin + "/assets/images/facas-sg.png",
                    site: "https://sgfacas.com.br/",
                },
                {
                    name: "Chopeiras Eltz",
                    logo:
                        window.location.origin +
                        "/assets/images/chopeiras-logo.jpg",
                    site: "https://loja.chopeiraseltz.com.br",
                },

                {
                    name: "Quatrun Lareiras",
                    logo:
                        window.location.origin +
                        "/assets/images/quatrun-logo.jpg",
                    site: "https://www.quatrunaquecimento.com.br/home",
                },

                {
                    name: "Guindani Fogões",
                    logo:
                        window.location.origin +
                        "/assets/images/guindani-logo.png",
                    site: "https://www.guindanifogoes.com.br/",
                },
            ],
        };
    },
    components: { VueperSlide, VueperSlides },
};
