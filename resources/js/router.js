import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {path: '/categories', component: () => import('./components/Category/Index'), name: 'categories.index'},
        {path: '/categories/:id', component: () => import('./components/Category/Show'), name: 'categories.show'},

        {path: '/admin', component: () => import('./components/Admin/Index'), name: 'admin.index'},
        {
            path: '/admin/categories',
            component: () => import('./components/Admin/Category/Index'),
            name: 'admin.categories.index'
        },
        {
            path: '/admin/categories/create',
            component: () => import('./components/Admin/Category/Create'),
            name: 'admin.categories.create'
        },
        {
            path: '/admin/categories/:id/edit',
            component: () => import('./components/Admin/Category/Edit'),
            name: 'admin.categories.edit'
        },
        {
            path: '/admin/categories/:id',
            component: () => import('./components/Admin/Category/Show'),
            name: 'admin.categories.show'
        },
    ]
})
