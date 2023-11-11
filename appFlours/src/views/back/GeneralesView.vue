<template>
  <section class="bg-gray-100/50">
    <form class="shadow-md">
      <div class="p-4 border-t-2 border-indigo-400 rounded-lg bg-gray-100/5">
        <div class="max-w-sm md:w-full md:mx-0">
          <div class="inline-flex items-center space-x-4">
            <h1 class="text-gray-600 font-bold">
              Antes de empezar - Configuraciones generales
            </h1>
          </div>
        </div>
      </div>
      <div class="space-y-6 bg-white">
        <div class="items-center w-full p-4 gap-4 text-gray-500 flex justify-start md:flex-row flex-col">
          <div class="md:w-1/3 w-full">
            <h2 class="font-semibold">Categoria</h2>
            <span class="text-sm">Filtros mas especifico</span>
          </div>
          <div class="md:w-1/3 w-full">
            <div class="flex gap-2">
              <input type="text" id="name" v-model="name"
                class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-indigo-600 focus"
                placeholder="Frituras, Combos, etc" />
              <button @click.prevent="addCategoria"
                class="py-2 px-4 bg-green-600 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-blue-200 text-white text-end transition ease-in duration-200 text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
                Crear
              </button>
            </div>
          </div>
          <!-- {{ categorias }} -->
          <div class="md:w-1/3 w-full flex flex-wrap gap-1" v-if="categorias.length >= 0">
            <div class="ps-3 pe-2 py-1 text-base rounded-full items-center inline-flex text-white bg-indigo-500"
              v-for="categoria in categorias" :key="categoria.id">
              <span class="me-1">{{ categoria.name }}</span>
              <button class="bg-transparent hover:bg-indigo-400 rounded-full"
                @click.prevent="deleteCategoria(categoria.id)">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="m-1"
                  viewBox="0 0 1792 1792">
                  <path
                    d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z">
                  </path>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <hr />
        <div class="items-center w-full p-4 gap-4 text-gray-500 flex justify-start md:flex-row flex-col">
          <div class="md:w-1/3 w-full">
            <h2 class="font-semibold">...</h2>
          </div>
        </div>
        <hr />
        <div class="w-full px-4 pb-4 text-end text-gray-500">
          <router-link :to="{ name: 'productosCreate' }"
            class="py-2 px-8 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-blue-200 text-white text-end transition ease-in duration-200 text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
            Continuar
          </router-link>
        </div>
      </div>
    </form>
  </section>
</template>

<script setup>
import CategoryService from "../../services/CategoryService.js";
import { ref, onMounted } from "vue";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";

const service = new CategoryService();
const categorias = ref([]);
const name = ref("");

const fetchData = async () => {
  categorias.value = await service.fetchAll();
};

onMounted(() => {
  fetchData();
});

const deleteCategoria = async (id) => {
  const response = await service.delete(id);
  if (response == false) {
    toast.error("no se pudo eliminar!", {
      position: toast.POSITION.TOP_RIGHT,
    });
  } else {
    toast.success("Se elimino!", {
      position: toast.POSITION.TOP_RIGHT,
    });
    fetchData();
  }
};
const addCategoria = async () => {
  const response = await service.add(name.value);
  if (response == false) {
    toast.error("No se pudo Agregar!", {
      position: toast.POSITION.TOP_RIGHT,
    });
  } else {
    toast.success("Exito!", {
      position: toast.POSITION.TOP_RIGHT,
    });
    name.value = '';
    fetchData();
  }
};

toast.info("¡Agrega información!", {
  position: "top-right",
});
</script>

<style scoped></style>
