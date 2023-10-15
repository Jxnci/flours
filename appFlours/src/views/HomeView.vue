<template>
  <div class="font-sans">
    <HeaderApp />
    <Hero />
    <Divider1 />

    <!-- <HelloWorld /> -->
    <!-- <Divider /> -->
    <Testimonial />
    <!-- <Divider /> -->
    <!-- <Pricing /> -->
    <Concact />
    <FooterApp />
  </div>
</template>

<script setup>
import HeaderApp from "../components/HeaderApp.vue";
import FooterApp from "../components/FooterApp.vue";



// import HelloWorld from "./components/HelloWorld.vue";
import Hero from "../components/Hero.vue";
import Concact from "../components/Contact.vue"; 
import Testimonial from "../components/Testimonial.vue"; 
// import Pricing from "./components/pricing.vue"; 
// import Herramienta from "./components/Herramienta.vue";
// import Divider from "./components/divider.vue";
import Divider1 from "../components/divider1.vue"; 
// import Pos from "./views/backoffice/Pos.vue";
// import CycleOption from "./views/backoffice/CycleOption.vue";
// import PostList from "./views/backoffice/PostList.vue";
// import Computed from "./views/backoffice/Computed.vue";
</script>

<style>
html {
  scroll-behavior: smooth;
}
</style>
