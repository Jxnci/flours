<template >
  <div class="bg-gray-50 p-4">
    <Header />
    <div class="mt-4">
      <router-view />
    </div>
  </div>
</template>
<script setup>
import { RouterView } from "vue-router";
import Header from "../../components/componentsBack/Header.vue";
</script>
