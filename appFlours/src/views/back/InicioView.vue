<template>
  <div class="bg-white dark:bg-gray-800">
    <div
      class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20"
    >
      <h2
        class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl"
      >
        <span class="block"> ¿Quieres ser millonario? </span>
        <span class="block text-blue-500"> Es ahora o nunca. </span>
      </h2>
      <div class="lg:mt-0 lg:flex-shrink-0">
        <div class="inline-flex rounded-md shadow">
          <router-link
            :to="{ name: 'productosCreate' }"
            class="py-4 px-6 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
          >
            Crea un producto
          </router-link>
        </div>
        <div class="inline-flex ml-3 rounded-md shadow">
          <button
            type="button"
            class="py-4 px-6 bg-gray-600 hover:bg-gray-700 focus:ring-gray-500 focus:ring-offset-gray-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
          >
            Invita amigos
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="mx-4 flex justify-between">
    <Data />
    <Data />
    <Data />
    <Data />
  </div>
</template>
<script setup>
import Data from "../../components/componentsBack/Data.vue";
import { RouterLink } from "vue-router";
</script>
