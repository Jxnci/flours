<template>
  <div
    class=" flex flex-col items-center justify-center w-full mx-auto"
  >
    <div
      class="w-full px-4 py-5 mb-2 bg-white border rounded-md shadow sm:px-6 dark:bg-gray-800 flex justify-between items-center"
    >
      <div>
        <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-white">
          Tabla de productos
        </h3>
        <p class="max-w-2xl mt-1 text-sm text-gray-500 dark:text-gray-200">
          Detalles e información sobre productos.
        </p>
      </div>
      <div>
        <router-link
          :to="{ name: 'productosCreate' }"
          class="py-2 px-4 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
        >
          Nuevo Producto
        </router-link>
      </div>
    </div>

    <ul class="flex flex-col w-full"> 
      <li
        class="flex flex-row mb-2 border-gray-400"
        v-for="(producto, index) in productos"
        :key="index"
      >
        <router-link
          :to="{ name: 'productoDetail', params: { id: index } }"
          class="transition duration-500 shadow ease-in-out transform hover:-translate-y-1 hover:shadow-lg select-none cursor-pointer bg-white dark:bg-gray-800 rounded-md flex flex-1 items-center p-4"
        >
          <div class="flex flex-col items-center justify-center w-10 h-10 mr-4">
            <a href="#" class="relative block">
              <img
                alt="profil"
                src="/1.jpg"
                class="mx-auto object-cover rounded-full h-10 w-10"
              />
            </a>
          </div>
          <div class="flex-1 pl-1 md:mr-16">
            <div class="font-medium dark:text-white">{{ producto.name }}</div>
            <div class="text-sm text-gray-600 dark:text-gray-200">
              {{ producto.category }}
            </div>
          </div>
          <div class="text-xs text-gray-600 dark:text-gray-200">
            S/. {{ producto.price }}
          </div>
          <button class="flex justify-end w-24 text-right">
            <svg
              width="12"
              fill="currentColor"
              height="12"
              class="text-gray-500 hover:text-gray-800 dark:hover:text-white dark:text-gray-200"
              viewBox="0 0 1792 1792"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"
              ></path>
            </svg>
          </button>
        </router-link>
      </li>
    </ul>
  </div>
</template>
<script setup>
import { RouterLink } from "vue-router";
const productos = [
  {
    name: "Producto de prueba 1",
    category: "Categoria1",
    price: "12.50",
  },
  {
    name: "Producto de prueba 2",
    category: "Categoria2",
    price: "9.30",
  },
  {
    name: "Producto de prueba 3",
    category: "Categoria1",
    price: "4.80",
  },
];
</script>
<style scoped></style>
