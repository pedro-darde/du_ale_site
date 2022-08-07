import {VueperSlides, VueperSlide} from 'vueperslides'

export default {
    props: {
        urls: {
            required: true
        }
    },
    data() {
        return {
            slides: [
                {
                    title: 'Slide #1',
                    content: 'Slide 1 content.'
                },
                {
                    title: 'Slide #2',
                    content: 'Slide 2 content.'
                }
            ]
        }
    },
    components: {
        VueperSlides, VueperSlide
    }
}
