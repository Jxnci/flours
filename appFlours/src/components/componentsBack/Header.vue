<template>
  <header
    class="z-40 items-center w-auto border h-16 bg-white shadow-md dark:bg-gray-700 rounded-2xl"
  >
    <div
      class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center"
    >
      <div class="flex items-center justify-between w-full pl-1">
        <div class="z-50 flex w-full h-auto">
          <div
            class="relative flex items-center w-full h-full lg:w-64 group border rounded-full"
          >
            <div
              class="absolute z-50 flex items-center justify-center w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden"
            >
              <svg
                fill="none"
                class="relative w-5 h-5"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
              </svg>
            </div>
            <svg
              class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
            >
              <path
                d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"
              ></path>
            </svg>
            <input
              type="text"
              class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-500"
              placeholder="Filtrar Producto ..."
            />
            <div
              class="absolute right-0 hidden h-auto px-2 py-1 mr-2 text-xs text-gray-400 border border-gray-300 rounded-2xl md:block"
            >
              +
            </div>
          </div>
        </div>
        <div class="md:hidden flex justify-end ms-2">
          <button
            @click="toggleResponsive"
            class="border rounded-lg bg-gray-50 px-2 py-1"
          >
            <v-icon name="hi-solid-menu" class="text-gray-600" />
          </button>
          <div
            class="absolute right-0 top-12 w-56 mt-2 origin-top-right flex flex-col p-4 gap-2 bg-white rounded-md shadow-lg dark:bg-gray-800 ring-1 ring-black ring-opacity-5"
            :class="{ hidden: !responsive }"
          >
            <router-link
              :to="{ name: 'inicio' }"
              class="text-gray-500 hover:text-gray-700"
              >Inicio</router-link
            >
            <router-link
              :to="{ name: 'productos' }"
              class="text-gray-500 hover:text-gray-700"
              >Productos</router-link
            >
            <router-link
              :to="{ name: 'predicciones' }"
              class="text-gray-500 hover:text-gray-700"
              >Predicciones</router-link
            >
          </div>
        </div>
        <div class="flex items-center p-1 ms-2 gap-6">
          <router-link
            :to="{ name: 'inicio' }"
            class="text-gray-500 hover:text-gray-700 max-md:hidden max-md:w-0"
            >Inicio</router-link
          >
          <router-link
            :to="{ name: 'productos' }"
            class="text-gray-500 hover:text-gray-700 max-md:hidden max-md:w-0"
            >Productos</router-link
          >
          <router-link
            :to="{ name: 'predicciones' }"
            class="text-gray-500 hover:text-gray-700 max-md:hidden max-md:w-0"
            >Predicciones</router-link
          >

          <div class="text-left w-12">
            <div class="">
              <button
                type="button"
                class="flex items-center justify-center rounded-full text-sm font-medium text-gray-700 dark:text-gray-50 hover:bg-gray-50 dark:hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-gray-500"
                @click="toggleMenu"
              >
                <img
                  alt="profil"
                  src="/1.jpg"
                  class="object-cover rounded-full h-10 w-10"
                />
              </button>
            </div>
            <div
              class="absolute right-0 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg dark:bg-gray-800 ring-1 ring-black ring-opacity-5"
              :class="{ hidden: !isMenuOpen }"
            >
              <div
                class="py-1"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="options-menu"
              >
                <div
                  class="block px-4 py-2 text-md bg-gray-100 m-2 rounded-md text-gray-700 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600"
                  role="menuitem"
                >
                  <span class="flex flex-col">
                    <span> Nombre Apellido </span>
                    <span> Normal </span>
                  </span>
                </div>
                <router-link
                  :to="{ name: '' }"
                  class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600"
                  role="menuitem"
                >
                  <span class="flex flex-col">
                    <span> Mi perfil </span>
                  </span>
                </router-link>
                <router-link
                  :to="{ name: '' }"
                  class="block px-4 py-2 text-md bg-red-500 text-gray-100 hover:bg-red-600 m-2 rounded-md text-center"
                  role="menuitem"
                >
                  <span class="flex flex-col">
                    <button @click.prevent="logout">Cerrar Sesion</button>
                  </span>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
<script setup>
import { RouterLink } from "vue-router";
import { ref } from "vue";
import router from "../../router";

let isMenuOpen = ref(false);
let responsive = ref(false);

function toggleMenu() {
  isMenuOpen.value = !isMenuOpen.value;
}
function toggleResponsive() {
  responsive.value = !responsive.value;
}

import useAuth from "../../store/useAuth";
const store = useAuth();

const logout = () => {
  store.logout();
  router.push({ name: "login" });
};
</script>
