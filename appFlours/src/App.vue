<template>

  <router-view />

</template>

<script setup>
import { RouterView } from "vue-router";

</script>

<style scoped>
html {
  scroll-behavior: smooth;
}

header {
  width: 100%;
}

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 1rem;
  padding: 0.5rem;
  border-radius: 5px;
}

nav a.router-link-exact-active {
  color: red;
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid yellow;
}

nav a:first-of-type {
  border: 0;
}
</style>
