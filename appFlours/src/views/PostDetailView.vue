<template>
  <h1 class="mx-6 font-bold mb-2">Post Detail</h1>
  <div class="shadow border  m-4 rounded  p-4">
    <h3 class="mx-2 font-bold">{{ post.title }}</h3>
    <p class="mx-2 py-3">
      {{ post.body }}
    </p>
    <router-link
      :to="{ name: 'PostList' }"
      class="px-2 py-1 bg-red-600 hover:bg-red-700 rounded text-white mx-2 mt-3"
      >Volver</router-link
    >
  </div>
</template>
<script setup>
import PostService from "../services/PostService";
import { useRoute } from "vue-router";
import { onMounted } from "vue";

const service = new PostService();
const post = service.getPost();

onMounted(async () => {
  const route = useRoute();
  let elm = route.params.id;
  await service.fetchById(elm);
});
</script>
