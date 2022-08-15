import { favoriteSerive } from "../../../services/favorite-service";
import Product from "../Item/Product.vue";

export default {
    components: {
        product: Product,
    },
    data() {
        return {
            products: [],
            test: localStorage.favorites,
        };
    },
    methods: {
        fetchProducts() {
            axios
                .get("/products")
                .then((res) => {
                    const data = res.data.products;
                    this.products = data.map((item) => ({
                        ...item,
                        iconClass: favoriteSerive.exists(item.id)
                            ? "fa fa-star p-2"
                            : "fa fa-star-o p-2",
                    }));
                })
                .catch((err) => {});
        },
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
        this.fetchProducts();
        this.emitter.on("favorite-removed", this.onFavoriteRemoved);
    },
    watch: {
        test(value) {
            console.log("aqui", value);
        },
    },
};
