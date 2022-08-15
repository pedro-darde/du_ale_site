import phones from "../constants/phones";

export default {
    data() {
        return {
            sendToNumber: import.meta.env.VITE_WHATSAPP_NUMBER,
            whatsAppAPIUrl: "https://api.whatsapp.com/send?phone=",
        };
    },
    methods: {
        sendMessageInfoProduct(product_id) {
            const message =
                "Olá, gostaria de saber mais sobre o produto: " +
                window.location.origin +
                `/product/${product_id}`;

            const sendTo = this.sendToNumer || phones.DU_WHATS_NUMBER;

            window.open(
                `${this.whatsAppAPIUrl}${sendTo}&text=${message}`,
                "_blank"
            );
        },
        askAbout() {
            const message = "Olá gostaria de saber mais sobre a empresa!";
            const sendTo = this.sendToNumer || phones.DU_WHATS_NUMBER;
            window.open(`${this.whatsAppAPIUrl}${sendTo}&text=${message}`, '_blank')
        },
    },
};
