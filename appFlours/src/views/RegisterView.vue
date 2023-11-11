<template>
  <div
    class="flex mx-auto flex-col max-w-md px-4 py-8 bg-white rounded-lg shadow dark:bg-gray-800 sm:px-6 md:px-8 lg:px-10">
    <div class="self-center mb-2 text-xl font-light text-gray-800 sm:text-2xl dark:text-white">
      Creat una cuenta nueva
    </div>
    <span class="justify-center text-sm text-center text-gray-500 flex-items-center dark:text-gray-400">
      Ya tienes una cuenta?
      <router-link :to="{ name: 'login' }" class="text-sm text-blue-500 underline hover:text-blue-700">
        Inicia sesion
      </router-link>
    </span>
    <div class="p-6 mt-8">
      <form action="#">
        <div class="flex gap-4 mb-2">
          <div class="relative">
            <input type="text" v-model="name" id="name"
              class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-indigo-600"
              name="name" placeholder="Nombres" />
          </div>
          <div class="relative">
            <input v-model="lastname" type="text" id="lastname"
              class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-indigo-600"
              name="lastname" placeholder="Apellidos" />
          </div>
        </div>
        <div class="flex flex-col mb-2">
          <div class="relative">
            <input v-model="email" type="email" id="email"
              class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-indigo-600"
              placeholder="Email" />
          </div>
        </div>
        <div class="flex flex-col mb-2">
          <div class="relative">
            <input v-model="password" type="password" id="password"
              class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-indigo-600"
              name="pseudo" placeholder="Contraseña" />
          </div>
        </div>
        <div class="flex w-full my-4">
          <button @click.prevent="createUser"
            class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg">
            Registrarse
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
<script setup>
import { ref } from "vue";
import useAuth from "../store/useAuth";
import router from "../router";
import { toast } from "vue3-toastify";
import "vue3-toastify/dist/index.css";

const store = useAuth();

const name = ref("");
const lastname = ref("");
const email = ref("");
const password = ref("");

const createUser = async () => {
  const response = await store.register(
    name.value,
    lastname.value,
    email.value,
    password.value
  );
  if (response == false) {
    toast.warn("Ocurrio un error(msjbcknd)!", {
      position: toast.POSITION.TOP_RIGHT,
    });
  } else {
    router.push({ name: "login" });
  }
};
</script>
