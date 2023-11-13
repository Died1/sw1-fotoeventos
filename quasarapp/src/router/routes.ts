import {   RouteRecordRaw } from "vue-router";

const routes: RouteRecordRaw[] = [

  {
    path: "/login",
    component: () => import("pages/auth/LoginPage.vue"),
  },
  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    meta: { requiresAuth: true }, // Ruta protegida
    children: [
      { path: "", component: () => import("pages/IndexPage.vue") }
    ],
  },
  {
    path: "/events",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      //{ path: "", component: () => import("pages/IndexPage.vue") },
      { path: "", component: () => import("pages/events/EventPage.vue") }
    ],
  },
  {
    path: "/albums",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      //{ path: "", component: () => import("pages/IndexPage.vue") },
      { path: "", component: () => import("pages/albums/AlbumPage.vue") }
    ],
  },
  {
    path: "/photos",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      { path: "", component: () => import("pages/photos/PhotoPage.vue") }
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
