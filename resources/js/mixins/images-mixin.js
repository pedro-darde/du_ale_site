export default {
    computed: {
        logoImage() {
            return window.location.origin + "/assets/images/logo-image.jpeg";
        },
        admIconImage() {
            return window.location.origin + "/assets/images/admin-image.png"
        },
    },
    methods: {
        getProductImagesUrls(product) {
            if (!product.media.length) return [window.location.origin + "/assets/images/no-image.png"]
            return product.media.map(item => item.original_url)
        }
    }
};
