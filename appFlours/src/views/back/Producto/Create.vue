<template>
  <div novalidate="" action="" class="flex flex-col mx-auto space-y-6 text-gray-900  ">
    <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-white border">
      <div class="space-y-2 col-span-full lg:col-span-1">
        <p class="font-medium">Informacion del producto</p>
        <p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!</p>
      </div>
      <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
        <div class="col-span-full sm:col-span-4">
          <label for="firstname" class="text-sm">Nombre</label>
          <input id="firstname" type="text" placeholder="Nombre del producto" v-model="name"
            class="w-full rounded-md border-gray-300 text-gray-900">
        </div>
        <div class="col-span-full sm:col-span-2">
          <label for="lastname" class="text-sm">Cantidad</label>
          <input id="lastname" type="number" placeholder="##" v-model="stock"
            class="w-full rounded-md border-gray-300 text-gray-900">
        </div>
        <div class="col-span-full sm:col-span-3 flex items-center">
          <input type="checkbox" name="" id="" v-model="state">
          <span class="ms-4">Activo / Inactivo</span>
        </div>
        <div class="col-span-full sm:col-span-3">
          <label for="address" class="text-sm">Categoria</label>
          <select name="" id="" class="w-full rounded-md border-gray-300 text-gray-900" v-model="category_id">
            <option value="a">Hola</option>
            <option value="b">Hola</option>
            <option value="c">Hola</option>
          </select>
        </div>
      </div>
    </fieldset>
    <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-white border">
      <div class="space-y-2 col-span-full lg:col-span-1">
        <p class="font-medium">Informacion Adicional</p>
        <p class="text-xs">Nota: El calculo del precio de venta se realiza luego, dejarlo por defecto!</p>
      </div>
      <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
        <div class="col-span-full sm:col-span-3">
          <label for="username" class="text-sm">Precio de compra</label>
          <input v-model="price_buy" id="username" type="number" placeholder="00.00" step="0.1" class="w-full rounded-md border-gray-300 text-gray-900">
        </div>
        <div class="col-span-full sm:col-span-3">
          <label for="website" class="text-sm">Precio de venta</label>
          <input v-model="price_sale" id="website" type="number" placeholder="00.00" class="w-full rounded-md border-gray-300 text-gray-900">
        </div>
        <div class="col-span-full sm:col-span-3">
          <label for="website" class="text-sm">Porcentaje de ganacia esperada</label>
          <input v-model="rate" id="website" type="number" placeholder="00.00" class="w-full rounded-md border-gray-300 text-gray-900">
        </div>
        <div class="col-span-full">
          <label for="bio" class="text-sm">Imgen del producto</label>
          <div class="flex gap-2 max-md:flex-col">
            <input type="file" name="files" id="files"
              class="px-8 py-12 max-md:px-0 border-2 border-dashed rounded-md border-gray-300 text-gray-600 bg-gray-100">
            <img src="https://source.unsplash.com/500x500/?random" alt="" class="w-32 h-32 rounded-lg object-cover bg-gray-300">
          </div>
        </div>
      </div>
    </fieldset>
    <div class="flex gap-3 my-4">
      <router-link :to="{ name: 'productos' }"
        class=" py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
        Crear Producto
      </router-link>
      <router-link :to="{ name: 'productos' }"
        class="py-2 px-4 bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
        Cancelar
      </router-link>
    </div>
  </div>
</template>
<script setup>
import { ref } from "vue";
import { RouterLink } from "vue-router";

const name = ref('');
const stock = ref(0);
const price_buy = ref(0);
const price_sale = ref(0.0);
const state = ref('');
const rate = ref(0);
const category_id = ref('');

</script>
