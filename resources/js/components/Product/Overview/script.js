import imagesMixin from "../../../mixins/images-mixin";
import ImageCarousel from '../Carousel/ImageCarousel.vue';
export default {
    mixins: [imagesMixin],
    components: {
        'image-carousel': ImageCarousel
    },
    props: {
        product: {
            required: true,
            type: Object
        }
    }
}
