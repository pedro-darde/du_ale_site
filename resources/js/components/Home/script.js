import logoImageMixin from "../../mixins/images-mixin";
import ProductList from '../Product/Main/ProductList.vue'
export default {
  mixins: [logoImageMixin],
    components: {
      product_list: ProductList
    }
};
