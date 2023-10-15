<template>
  <div class="border rounded p-2 mb-2 bg-gray-100">{{ props.title }}</div>
  <p class="px-2 mb-2">
    {{ props.content }}
  </p>
  <input type="text" class="w-100 border px-2 py-1 rounded" v-model="message" />
  <button
    class="rounded bg-green-500 text-white px-4 py-1 ms-2 mb-4"
    @click="handleclick"
  >
    Di hola
  </button>
</template>
<script setup>
import { defineProps, defineEmits, ref } from "vue";

const props = defineProps({
  title: { type: String, required: true },
  content: String,
});

const emit = defineEmits(["sayHi"]);   

const handleclick = () => {
  emit("sayHi", message.value);
};

let message = ref("");
</script>
<style scoped></style>
