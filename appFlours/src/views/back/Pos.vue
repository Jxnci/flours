<template>
  <section class="border m-10 p-5 rounded shadow">
    <h3>Anadir Profesor</h3>
    <div>
      <label>Nombres</label>
      <input
        type="text"
        class="border px-2 py-1 focus:outline-none rounded m-2"
        v-model="teacher.namet"
      />
    </div>
    <div>
      <label>Apellidos</label>
      <input
        type="text"
        class="border px-2 py-1 focus:outline-none rounded m-2"
        v-model="teacher.surname"
      />
    </div>
    <div>
      <label>DNI</label>
      <input
        type="text"
        class="border px-2 py-1 focus:outline-none rounded m-2"
        v-model="teacher.dni"
      />
    </div>
    <div>
      <label>Materias</label>
      <input
        type="text"
        class="border px-2 py-1 focus:outline-none rounded m-2"
        v-model="subject"
      />
      <button
        class="bg-green-500 text-white px-4 py-1 rounded"
        @click="handleSubjet()"
      >
        Agregar
      </button>
      <div>
        <ul class="border">
          <li
            v-for="(sub, index) in teacher.subjects"
            :key="index"
            class="border"
          >
            {{ sub }}
          </li>
        </ul>
      </div>
    </div>
    <input type="checkbox" v-model="teacher.docs"/> Documentacion entregada <br />
    <button
      class="bg-green-500 text-white px-4 py-1 rounded"
      @click="handleAddTeacher()"
    >
      Agregar
    </button>
  </section>
  <section class="border m-10 p-5 rounded shadow">
    <h3>Listado de profesores</h3>
    <table class="table-auto hover:table-fixed">
      <thead>
        <tr>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>DNI</th>
          <th>Materias</th>
          <th>Docs</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="teach in teachers" :key="teach.dni">
          <td>{{ teach.namet }}</td>
          <td>{{ teach.surname }}</td>
          <td>{{ teach.dni }}</td>
          <td>{{ teach.subjects }}</td>
          <td v-if="teach.docs">Entregado</td>
          <td v-else>no Entregado</td>
        </tr>
      </tbody>
    </table>
  </section>
</template>

<script setup>
import { ref } from "vue";
let teacher = ref({
  namet: "",
  surname: "",
  dni: "",
  subjects: [],
  docs: false,
});
let teachers = ref([]);
let subject = ref("");

const handleSubjet = () => {
  teacher.value.subjects.push(subject.value);
  subject.value = "";
};
const handleAddTeacher = () => {
  teachers.value.push({
    namet:teacher.value.namet,
    surname:teacher.value.surname,
    dni:teacher.value.dni,
    subjects:teacher.value.subjects,
    docs:teacher.value.docs,
  });
  teacher.value.namet = "";
  teacher.value.surname = "";
  teacher.value.dni = "";
  teacher.value.subjects = [];
  teacher.value.docs = false;
};
</script>

<style scoped></style>
