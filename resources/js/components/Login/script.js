export default {
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
            this.errors = {
                email: "aaaaaaaaaaaaa",
                password: "aaaaaaaaa",
            };
        },
    },
};
