<template>
  <div
    class="flex flex-col px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10 border mx-4"
  >
    <div
      class="self-center mb-2 text-xl font-light text-gray-800 sm:text-2xl dark:text-white"
    >
      Crea un nuevo Producto
    </div>
    <span
      class="justify-center text-sm text-center text-gray-500 flex-items-center dark:text-gray-400"
    >
      Requiere asistencia ?
      <a
        href="#"
        target="_blank"
        class="text-sm text-blue-500 underline hover:text-blue-700"
      >
        Ayuda
      </a>
    </span>
    <div class="p-6 mt-8">
      <form action="#">
        <div class="flex flex-col mb-2">
          <div class="relative">
            <input
              type="text"
              id="create-account-pseudo"
              class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
              name="pseudo"
              placeholder="Descripcion"
            />
          </div>
        </div>
        <div class="flex gap-4 mb-2">
          <div class="w-full">
            <input
              type="text"
              id="create-account-first-name"
              class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
              name="First name"
              placeholder="Fecha"
            />
          </div>
          <div class="w-full">
            <input
              type="text"
              id="create-account-last-name"
              class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
              name="Last name"
              placeholder="Hora"
            />
          </div>
        </div>
        <div class="flex flex-col mb-2">
          <div class="relative">
            <input
              type="text"
              id="create-account-email"
              class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
              placeholder="Nombre"
            />
          </div>
        </div>
        <div class="flex w-min gap-3 my-4">
          <router-link
            :to="{ name: 'productos' }"
            class="py-2 px-4 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
          >
            Crear
          </router-link>
          <router-link
            :to="{ name: 'productos' }"
            class="py-2 px-4 bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
          >
            Cancelar
          </router-link>
        </div>
      </form>
    </div>
  </div>
</template>
<script setup>
import { RouterLink } from "vue-router";
</script>
