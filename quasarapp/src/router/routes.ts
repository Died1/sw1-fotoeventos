import { route } from "quasar/wrappers";
import {   RouteRecordRaw } from "vue-router";

const routes: RouteRecordRaw[] = [
    {
        path: "/login",
        component: () => import("pages/auth/LoginPage.vue"),
    },
    {
        path: "/register",
        component: () => import("pages/auth/RegisterPage.vue"),
    },
    {
        path: "/",
        component: () => import("layouts/MainLayout.vue"),
        children: [
            {
                path: "",
                component: () => import("pages/IndexPage.vue"),
                props: (route) => ({ search: route.query.search }),
            },
        ],
    },
    {
        path: "/events/:id/details",
        component: () => import("layouts/MainLayout.vue"),
        children: [
            {
                path: "",
                component: () => import("pages/events/EventDetail.vue"),
            },
        ],
    },
    {
        path: "/search",
        component: () => import("layouts/MainLayout.vue"),
        //meta: { requiresAuth: true },
        children: [
            {
                path: "",
                component: () => import("pages/SearchPage.vue"),
                props: (route) => ({ kw: route.query.kw }),
            },
        ],
    },

    //RUTAS PROTEGIDAS
    {
        path: "/shoppingcart",
        component: () => import("layouts/MainLayout.vue"),
        //meta: { requiresAuth: true }, // Ruta protegida
        children: [
            {
                path: "",
                component: () => import("pages/shopping/ShoppingCart.vue"),
            },
        ],
    },
    {
        path: "/padmin",
        component: () => import("layouts/MainLayout.vue"),
        meta: { requiresAuth: true }, // Ruta protegida
        children: [
            { path: "", component: () => import("pages/admin/PanelAdmin.vue") },
        ],
    },

    // Always leave this as last one,
    // but you can also remove it
    {
        path: "/:catchAll(.*)*",
        component: () => import("pages/ErrorNotFound.vue"),
    },
];


export default routes;
