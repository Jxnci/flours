<template>
<div>
  <h3 class="font-bold text-xl mx-6 my-2">Listado de Posts</h3>
  <ul>
    <li v-for="elem in posts" :key="elem.id" class="border rounded-md shadow mb-2 p-2 mx-4">
      <h2 class="p-2 font-bold">{{ elem.title }}</h2>
      <p class="p-2">{{ elem.body }}</p>
    </li>
  </ul>
</div>
</template>
<script setup>
import PostService  from "../../services/PostService";
import { onMounted } from "vue";
const service = new PostService();
const posts = service.getPosts()

onMounted(async () => {
  await service.fetchAll();
});
 
</script>
<style scoped></style>
