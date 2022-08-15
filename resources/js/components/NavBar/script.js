import logoImageMixin from "../../mixins/images-mixin";
import FavoriteComponent from "../Favorites/FavoriteComponent.vue";
export default {
    mixins: [logoImageMixin],
    components: {
        favorites: FavoriteComponent,
    },
};
