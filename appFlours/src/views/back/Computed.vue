<template>
  <div class="p-4 m-4 shadow border rounded-md">
    <input
      type="text"
      v-model="message"
      class="px-2 py-1 mb-4 border rounded"
    />
    <h3 class="font-bold p-4">{{ reverse }}</h3>
  </div>
  <div class="p-4 m-4 shadow border rounded-md">
    <label v-custom-font.xxl.blue>subtotal</label>
    <input
      type="number"
      v-model="subtotal"
      class="px-2 py-1 mb-4 border rounded"
    />
    <h3 v-custom-font.red>Total impuestos a pagar : {{ totalVat }}({{ vat }})%</h3>
  </div>
</template>
<script setup>
import { ref, computed } from "vue";
let message = ref("");
const reverse = computed(() => message.value.split("").reverse().join(""));

const vat = 18;
let subtotal = ref(0);
const totalVat = computed(() => (vat * subtotal.value) / 100);
</script>
<style scoped></style>
