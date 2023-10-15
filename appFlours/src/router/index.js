import { createRouter, createWebHistory } from "vue-router";

import LoginView from "../views/LoginView.vue";
import HomeView from "../views/HomeView.vue";
import PostList from "../views/PostListView.vue";
import PostDetail from "../views/PostDetailView.vue";
import PanelView from "../views/back/PanelView.vue";

import Productos from "../views/back/ProductosView.vue";
import Inicio from "../views/back/InicioView.vue";
import Predicciones from "../views/back/PrediccionesView.vue";

import Show from "../views/back/Producto/Show.vue";
import Create from "../views/back/Producto/Create.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  {
    path: "/login",
    name: "login",
    component: LoginView,
  },
  {
    path: "/post",
    name: "PostList",
    component: PostList,
  },
  {
    path: "/post/:id",
    name: "PostDetail",
    component: PostDetail,
  },
  // {
  //   path: "/panel",
  //   redirect: (to) => {
  //     return { name: "inicio" };
  //   },
  // },
  {
    path: "/panel",
    name: "panel",
    component: PanelView,
    children: [
      {
        path: "inicio",
        name: "inicio",
        component: Inicio,
      },
      {
        path: "productos",
        name: "productos",
        component: Productos,
      },
      {
        path: "productos/:id",
        name: "productoDetail",
        component: Show,
      },
      {
        path: "productos/create",
        name: "productosCreate",
        component: Create,
      },
      {
        path: "predicciones",
        name: "predicciones",
        component: Predicciones,
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;
