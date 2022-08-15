import { favoriteSerive } from "../../../services/favorite-service";

export default {
    props: {
        product: {
            type: Object,
            required: true,
        },
    },
    computed: {
        hrefProduct() {
            return `/product/${this.product.id}`;
        },
        favoriteIcon() {
            return this.product.iconClass ?? "fa fa-star-o p-2";
        },
    },
    methods: {
        favorite() {
            const iconClass = favoriteSerive.favorite(this.product);
            this.$emit("iconChanged", { iconClass, id: this.product.id });
        },
    },
};
