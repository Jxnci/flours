<template>
  <div class="p-4 bg-white shadow-lg rounded-2xl dark:bg-gray-800 mx-4">
    <div class="flex flex-row gap-4 items-center">
      <div class="flex flex-row justify-between w-full">
        <div v-if="producto" class="flex gap-4">
          <img src="/1.jpg" class="rounded-lg w-16 h-16" />
          <div class="flex flex-col">
            <p class="text-xl font-medium text-gray-800 dark:text-white">
              {{ producto[0].name }}
            </p>
            <p class="text-xs text-gray-400">Cat:{{ producto[0].category_id }}</p>
            <p class="text-xs text-gray-400">stock:{{ producto[0].stock }}</p>
          </div>
        </div>
        <div v-else>
          <div class=" mx-auto rounded-md w-60">
            <div
              class="flex flex-row items-center justify-center h-full space-x-4 animate-pulse"
            >
              <div class="w-16 h-16 bg-gray-300 rounded-md"></div>
              <div class="flex flex-col space-y-2">
                <div class="h-4 bg-gray-300 rounded-md w-36"></div>
                <div class="w-24 h-4 bg-gray-300 rounded-md"></div>
                <div class="w-24 h-4 bg-gray-300 rounded-md"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2 bg-blue-100 rounded-lg dark:bg-white">
          <div
            class="flex gap-10 items-center justify-between text-lg text-gray-400 dark:text-black"
          >
            <p class="flex flex-col">
              Insumos
              <span class="font-bold text-black dark:text-indigo-500">
                ${amount}
              </span>
            </p>
            <p class="flex flex-col">
              Precio Base
              <span class="font-bold text-black dark:text-indigo-500">
                S/. ${price_base}
              </span>
            </p>
            <p class="flex flex-col">
              Precio venta
              <span class="font-bold text-black dark:text-indigo-500">
                S/. ${price_offer}
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-4">
    <div class="py-8">
      <div class="flex flex-row justify-between w-full mb-1 sm:mb-0">
        <h2 class="text-2xl leading-tight">Insumos</h2>
        <div class="text-end">
          <form
            class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 md:flex-row md:w-full md:space-x-3 md:space-y-0"
          >
            <div class="relative">
              <input
                type="text"
                class="rounded-lg appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                placeholder="Insumo ..."
              />
            </div>
            <button
              class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200"
              type="submit"
            >
              Filtrar
            </button>
          </form>
        </div>
      </div>
      <div class="py-4 overflow-x-auto w-full">
        <div
          class="inline-block min-w-full overflow-hidden rounded-lg shadow border"
        >
          <table class="min-w-full leading-normal">
            <thead>
              <tr>
                <th
                  scope="col"
                  class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200"
                >
                  Nombre
                </th>
                <th
                  scope="col"
                  class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200"
                >
                  Categoria
                </th>
                <th
                  scope="col"
                  class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200"
                >
                  Creado
                </th>
                <th
                  scope="col"
                  class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200"
                >
                  Estado
                </th>
                <th
                  scope="col"
                  class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200"
                >
                  Precio
                </th>
                <th
                  scope="col"
                  class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200"
                >
                  Opciones
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                      <a href="#" class="relative block">
                        <img
                          alt="profil"
                          src="/1.jpg"
                          class="mx-auto object-cover rounded-full h-10 w-10"
                        />
                      </a>
                    </div>
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                        Insumo de prueba
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <p class="text-gray-900 whitespace-no-wrap">cat</p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <p class="text-gray-900 whitespace-no-wrap">15/10/2023</p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <span
                    class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900"
                  >
                    <span
                      aria-hidden="true"
                      class="absolute inset-0 bg-green-200 rounded-full opacity-50"
                    >
                    </span>
                    <span class="relative"> active </span>
                  </span>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <input
                    type="number"
                    step="0.1"
                    class="rounded-lg appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    placeholder="Precio ..."
                  />
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">
                    Editar
                  </a>
                  <a href="#" class="text-red-600 hover:text-red-900">
                    Quitar
                  </a>
                </td>
              </tr>
              <tr>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                      <a href="#" class="relative block">
                        <img
                          alt="profil"
                          src="/1.jpg"
                          class="mx-auto object-cover rounded-full h-10 w-10"
                        />
                      </a>
                    </div>
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                        Insumo de prueba 2
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <p class="text-gray-900 whitespace-no-wrap">cat1</p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <p class="text-gray-900 whitespace-no-wrap">15/10/2023</p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <span
                    class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900"
                  >
                    <span
                      aria-hidden="true"
                      class="absolute inset-0 bg-green-200 rounded-full opacity-50"
                    >
                    </span>
                    <span class="relative"> active </span>
                  </span>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <input
                    type="number"
                    step="0.1"
                    class="rounded-lg appearance-none border border-gray-300 w-full py-2 px-4 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    placeholder="Precio ..."
                  />
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">
                    Editar
                  </a>
                  <a href="#" class="text-red-600 hover:text-red-900">
                    Quitar
                  </a>
                </td>
              </tr>
              <tr>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <div class="flex items-center">
                    <div class="flex-shrink-0">
                      <a href="#" class="relative block">
                        <img
                          alt="profil"
                          src="/1.jpg"
                          class="mx-auto object-cover rounded-full h-10 w-10"
                        />
                      </a>
                    </div>
                    <div class="ml-3">
                      <input
                        type="number"
                        step="0.1"
                        class="rounded-lg appearance-none border border-gray-300 w-full py-2 px-4 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                        placeholder="Nombre ..."
                      />
                    </div>
                  </div>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <input
                    type="number"
                    step="0.1"
                    class="rounded-lg appearance-none border border-gray-300 w-full py-2 px-4 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    placeholder="Categoria ..."
                  />
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <input
                    type="number"
                    step="0.1"
                    class="rounded-lg appearance-none border border-gray-300 w-full py-2 px-4 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    placeholder="Creacion ..."
                  />
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <input
                    type="number"
                    step="0.1"
                    class="rounded-lg appearance-none border border-gray-300 w-full py-2 px-4 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    placeholder="Estado ..."
                  />
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <input
                    type="number"
                    step="0.1"
                    class="rounded-lg appearance-none border border-gray-300 w-full py-2 px-4 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    placeholder="Precio ..."
                  />
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">
                    Editar
                  </a>
                  <a href="#" class="text-red-600 hover:text-red-900">
                    Quitar
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { ref, onMounted } from "vue";
import ProductService from "../../../services/ProductService.js";
import { useRoute } from "vue-router";

const route = useRoute();
const id = route.params.id;

const service = new ProductService();
const producto = ref(null);
onMounted(async () => {
  producto.value = await service.fetchById(id);
});
</script>
