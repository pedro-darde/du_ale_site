import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
export default {
    props: {
        urls: {
            required: true
        }
    },
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation
    }
}
