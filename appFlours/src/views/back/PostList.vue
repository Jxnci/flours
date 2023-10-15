<template>
  <div class="container shadow rounded border mx-auto p-2 mt-4">
    <PostDetail
      v-for="elm in info"
      :key="elm.title"
      :title="elm.title"
      :content="elm.content"
      @sayHi="showAlert"
    />
  </div>
</template>
<script setup>
import PostDetail from "./PostDetail.vue";
let info = [
  {
    title: "Este es el Post 1",
    content: "Texto de ejemplo dentro del contenido 1",
  },
  {
    title: "Este es el Post 2",
    content: "Texto de ejemplo dentro del contenido 2",
  },
  {
    title: "Este es el Post 3",
    content: "Texto de ejemplo dentro del contenido 3",
  },
  {
    title: "Este es el Post 4",
    content: "Texto de ejemplo dentro del contenido 4",
  },
  {
    title: "Este es el Post 5",
    content: "Texto de ejemplo dentro del contenido 5",
  },
];
function showAlert(msj) {
  alert(msj);
}
</script>
<style scoped></style>
