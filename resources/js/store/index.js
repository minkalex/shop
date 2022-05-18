import Vue from "vue";
import Vuex from "vuex"
import Category from "./modules/category"

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        Category
    }
})
