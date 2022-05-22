import { createRouter, createWebHistory } from "vue-router";

import ProductsIndex from '../components/products/ProductsIndex'
import ProductsCreate from '../components/products/ProductsCreate'
import ProductsEdit from '../components/products/ProductsEdit'

const routes = [
    {
        path: '/',
        name: 'products.index',
        component: ProductsIndex
    },
    {
        path: '/products/create',
        name: 'products.create',
        component: ProductsCreate
    },
    {
        path: '/products/:id/edit',
        name: 'products.edit',
        component: ProductsEdit,
        props: true
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
});
