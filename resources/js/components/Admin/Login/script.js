import imageMixin from "../../../mixins/images-mixin";
export default {
    mixins: [imageMixin],
    name: "LoginComponent",
    data() {
        return {
            email: "",
            password: "",
            errors: {
                email: "",
                password: "",
            },
        };
    },
    methods: {
        login() {
            axios.post("login", { email: this.email, password: this.password });
        },
    },
};
