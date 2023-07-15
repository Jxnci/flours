<script setup>
import { ref, computed } from "vue";

const msg = "Hola mundo";

const counter = ref(0);
const disabled = ref(false);

const numberfavorites = ref([]);

const increment = () => counter.value++;
const disminuir = () => counter.value--;
const reset = () => {
  numberfavorites.value = [];
  return (counter.value = 0);
};
const add = () => {
  numberfavorites.value.push(counter.value);
  return numberfavorites;
};

const classCounter = computed(() => {
  if (counter.value == 0) {
    return "bg-yellow-800";
  }
  if (counter.value > 0) {
    return "bg-green-800";
  }
  if (counter.value < 0) {
    return "bg-red-800";
  }
});
const repeatfav = computed(() => {
  let num = numberfavorites.value.find((numfavo) => numfavo === counter.value);
  if (num === 0) return true; 
  return num ? true : false;
});
</script>

<template>
  <h1 class="text-center font-bold uppercase py-5">{{ msg }}</h1>

  <div class="card text-center">
    <button
      class="bg-green-700 text-white p-2 py-1 mx-2 rounded"
      type="button"
      @click="increment"
    >
      Aumentar
    </button>
    <button
      class="bg-red-700 text-white p-2 py-1 mx-2 rounded"
      type="button"
      @click="disminuir"
    >
      Disminuir
    </button>
    <button
      class="bg-yellow-600 text-white p-2 py-1 mx-2 rounded"
      type="button"
      @click="reset"
    >
      Resetear
    </button>
    <button
      :disabled="repeatfav"
      class="bg-blue-500 text-white p-2 py-1 mx-2 rounded disabled:bg-slate-800"
      type="button"
      @click="add"
    >
      Favorito
    </button>

    <div :class="classCounter" class="text-white p-2 py-1 mx-2 rounded my-4">
      {{ counter }}
    </div>
    <ul
      role="list"
      class="divide-y divide-gray-100 mx-3 bg-gray-900 border rounded-md"
    >
      <li
        v-for="(fav, index) in numberfavorites"
        :key="index"
        class="gap-x-2 py-2 text-center"
      >
        [{{ index }}] {{ fav }}
      </li>
    </ul>
  </div>
</template>

<style></style>
