import { createRouter, createWebHistory } from "vue-router";

import LoginView from "../views/LoginView.vue";
import RegisterView from "../views/RegisterView.vue";
import HomeView from "../views/HomeView.vue";
import PostList from "../views/PostListView.vue";
import PostDetail from "../views/PostDetailView.vue";
import PanelView from "../views/back/PanelView.vue";

import Productos from "../views/back/ProductosView.vue";
import Inicio from "../views/back/InicioView.vue";
import Predicciones from "../views/back/PrediccionesView.vue";
import Generales from "../views/back/GeneralesView.vue";

import Show from "../views/back/Producto/Show.vue";
import Create from "../views/back/Producto/Create.vue";

import useAuth from "../store/useAuth";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
    meta: { requireAuth: false },
  },
  {
    path: "/login",
    name: "login",
    component: LoginView,
    meta: {
      requireAuth: false,
    },
  },
  {
    path: "/register",
    name: "register",
    component: RegisterView,
    meta: {
      requireAuth: false,
    },
  },
  {
    path: "/post",
    name: "PostList",
    component: PostList,
    meta: {
      requireAuth: false,
    },
  },
  {
    path: "/post/:id",
    name: "PostDetail",
    component: PostDetail,
    meta: {
      requireAuth: false,
    },
  },
  {
    path: "/panel",
    name: "panel",
    component: PanelView,
    redirect: (to) => {
      return { name: "inicio" };
    },
    children: [
      {
        path: "inicio",
        name: "inicio",
        component: Inicio,
        meta: {
          requireAuth: true,
        },
      },
      {
        path: "productos",
        name: "productos",
        component: Productos,
        meta: {
          requireAuth: true,
        },
      },
      {
        path: "productos/:id",
        name: "productoDetail",
        component: Show,
        meta: {
          requireAuth: true,
        },
      },
      {
        path: "productos/create",
        name: "productosCreate",
        component: Create,
        meta: {
          requireAuth: true,
        },
      },
      {
        path: "generales",
        name: "generales",
        component: Generales,
        meta: {
          requireAuth: true,
        },
      },
      {
        path: "predicciones",
        name: "predicciones",
        component: Predicciones,
        meta: {
          requireAuth: true,
        },
      },
    ],
    meta: {
      requireAuth: true,
    },
  },
];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
});

router.beforeEach((to, from, next) => {
  const store = useAuth();
  const auth = store.token;
  const needAuth = to.meta.requireAuth;
  if (needAuth && !auth) {
    next("login");
  } else {
    next();
  }
});

export default router;
