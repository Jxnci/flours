<template>
  <section class="text-gray-600 body-font bg-cyan-100">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1
          class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900"
        >
          Escoge un plan según tus necesidades
        </h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
          Puedes empezar por el plan <b>gratiuto</b>, ademas tendras un mes de prueba del plan <b>pro</b> al comenzar
        </p>
      </div>
      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th
                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl"
              >
                Plan
              </th>
              <th
                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
              >
                Caracteristicas
              </th>
              <th
                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
              >
                Almacenamiento
              </th>
              <th
                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
              >
                Price
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-3">Basico</td>
              <td class="px-4 py-3">Insumos/ventas</td>
              <td class="px-4 py-3">5 GB</td>
              <td class="px-4 py-3 text-lg text-gray-900">Gratis</td>
            </tr>
            <tr>
              <td class="border-t-2 border-gray-200 px-4 py-3">Regular</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">+ Reportes/Usuarios</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">+ 25 GB</td>
              <td
                class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900"
              >
                $20
              </td>
            </tr>
            <tr>
              <td class="border-t-2 border-gray-200 px-4 py-3">Pro</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">+ Sugerencias(IA)</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">+ 50 GB</td>
              <td
                class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900"
              >
                $50
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
      <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0"
          >Mas Información
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-4 h-4 ml-2"
            viewBox="0 0 24 24"
          >
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
        <button
          class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
        >
          Obtener Plan
        </button>
      </div>
    </div>
  </section>
</template>
