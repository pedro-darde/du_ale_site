export default {
    props: {
        product: {
            type: Object,
            required: true
        }
    },
    computed: {
        hrefProduct() {
            return `/product/${this.product.id}`
        }
    }
}
