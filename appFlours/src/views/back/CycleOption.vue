<template>
  <div class="m-4 p-4 shadow rounded-md border">Hola mundo</div>
</template>
<script setup>

import { onMounted,onUpdated } from 'vue'
onMounted(() => {
  console.log("mounted");
})

onUpdated(() => {
  console.log("updated");
})

</script>
<style scoped></style>
