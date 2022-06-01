import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {path: '/categories', component: () => import('./components/Category/Index'), name: 'categories.index'},
        {path: '/categories/:id', component: () => import('./components/Category/Show'), name: 'categories.show'},

        {path: '/admin', component: () => import('./components/Admin/Index'), name: 'admin.index'},
        {path: '/admin/categories', component: () => import('./components/Admin/Category'), name: 'admin.categories'},
        {path: '/admin/products', component: () => import('./components/Admin/Product'), name: 'admin.products'},
    ]
})
