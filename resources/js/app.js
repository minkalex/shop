require('./bootstrap');
import Vue from "vue";
import router from "./router";
import Index from "./components/Index"
const axios = require('axios').default;
axios.defaults.headers.common = {
    "X-Requested-With": "Axios",
};

const app = new Vue({
    el: '#app',

    components: {
        Index,
    },

    router
})
