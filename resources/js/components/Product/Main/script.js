import Product from '../Item/Product.vue'

export default {
    components: {
        'product': Product
    },
    data() {
        return {
            products: []
        }
    },
    methods: {
        fetchProducts() {
            axios.get('/products').then(res => {
                this.products = res.data.products
            }).catch(err => {

            })
        }
    },
    mounted() {
        this.fetchProducts()
    },
}
