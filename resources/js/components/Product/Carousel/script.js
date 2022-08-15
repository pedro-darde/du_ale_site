import {VueperSlides, VueperSlide} from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'
export default {
    props: {
        urls: {
            required: true
        }
    },
    components: {
        VueperSlides, VueperSlide
    }
}
