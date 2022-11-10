import imagesMixin from "../../../mixins/images-mixin";
import whatsAppMixin from "../../../mixins/whats-app-mixin";
import {favoriteSerive} from "../../../services/favorite-service";
import ImageCarousel from "../Carousel/ImageCarousel.vue";

export default {
    mixins: [imagesMixin, whatsAppMixin],
    components: {
        "image-carousel": ImageCarousel,
    },
    props: {
        product: {
            required: true
        }
    },
    methods: {
        favorite() {
            const iconClass = favoriteSerive.favorite(this.product);
            this.product.iconClass = iconClass;
        },
        onFavoriteRemoved(fav_id) {
            console.log(fav_id)
            if (fav_id === this.product.id) {
                this.product.iconClass = "fa fa-star-o p-2";
            }
        },
    },
    created() {
        this.product.iconClass = favoriteSerive.exists(this.product.id)
            ? "fa fa-star p-2"
            : "fa fa-star-o p-2";
    },
    mounted() {
        this.emitter.on("favorite-removed", this.onFavoriteRemoved);
    },
};
