import { favoriteSerive } from "../../services/favorite-service";

export default {
    data() {
        return {
            favorites: favoriteSerive.get(),
        };
    },
    methods: {
        loadFavoritos() {
            this.favorites = favoriteSerive.get();
        },
        getHrefProduct(id_product) {
            return `/product/${id_product}`;
        },
        removeFavorite(favorite_id) {
            favoriteSerive.remove(favorite_id);
            this.favorites = this.favorites.filter(
                (item) => item.id !== favorite_id
            );

            this.emitter.emit("favorite-removed", favorite_id);
        },
    },
};
