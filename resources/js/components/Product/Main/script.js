import { favoriteSerive } from "../../../services/favorite-service";
import Product from "../Item/Product.vue";

export default {
    components: {
        product: Product,
    },
    props: {
        products: {
            required: true,
        },
        line: {
            required: true,
        },
    },
    data() {
        return {
            test: localStorage.favorites,
        };
    },
    methods: {
        onIconChange({ iconClass, id }) {
            const productToChange = this.products.find(
                (item) => item.id === id
            );
            productToChange.iconClass = iconClass;
        },
        onFavoriteRemoved(fav_id) {
            let productToChange = this.products.find(
                (item) => item.id === fav_id
            );
            productToChange.iconClass = "fa fa-star-o p-2";
        },
    },
    mounted() {
        this.emitter.on("favorite-removed", this.onFavoriteRemoved);
    },
    watch: {
        test(value) {
            console.log("aqui", value);
        },
    },
};
