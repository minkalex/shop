import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        { path: '/categories', component: () => import('./components/Category/Index'), name: 'categories.index' },
        { path: '/categories/create', component: () => import('./components/Category/Create'), name: 'categories.create' },
        { path: '/categories/:id', component: (id) => import('./components/Category/Edit'), name: 'categories.edit' },
        { path: '/categories/:id', component: (id) => import('./components/Category/Show'), name: 'categories.show' },
    ]
})
