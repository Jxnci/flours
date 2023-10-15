<template>
  <section class="text-gray-600 body-font bg-violet-100">
    <div class="container mx-auto flex px-12 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center"
      >
        <span class="font-semibold uppercase">Registrate hoy!</span>
        <h1
          class="text-[1.8rem] sm:text-4xl xl:text-5xl font-bold leading-tight capitalize sm:pr-8 xl:pr-10"
        >
          Descubre la solución perfecta para
          <span
            class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 from-10% via-purple-500 via-30% to-blue-500"
            >administrar tu negocio</span
          >
        </h1>
        <p class="mb-8 leading-relaxed mt-4">
          Nuestro sistema web te ofrece una plataforma intuitiva y fácil de
          usar, diseñada especialmente para emprendedores como tú.
        </p>
        <div class="flex lg:flex-row max-md:flex-col gap-4"> 
          <button
            class="bg-sky-500 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-blue-400 focus:outline-none"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              width="512"
              height="512"
              class="w-6 h-6 text-white"
            >
              <path
                d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm8.647,7H17.426a19.676,19.676,0,0,0-2.821-4.644A10.031,10.031,0,0,1,20.647,7ZM16.5,12a10.211,10.211,0,0,1-.476,3H7.976A10.211,10.211,0,0,1,7.5,12a10.211,10.211,0,0,1,.476-3h8.048A10.211,10.211,0,0,1,16.5,12ZM8.778,17h6.444A19.614,19.614,0,0,1,12,21.588,19.57,19.57,0,0,1,8.778,17Zm0-10A19.614,19.614,0,0,1,12,2.412,19.57,19.57,0,0,1,15.222,7ZM9.4,2.356A19.676,19.676,0,0,0,6.574,7H3.353A10.031,10.031,0,0,1,9.4,2.356ZM2.461,9H5.9a12.016,12.016,0,0,0-.4,3,12.016,12.016,0,0,0,.4,3H2.461a9.992,9.992,0,0,1,0-6Zm.892,8H6.574A19.676,19.676,0,0,0,9.4,21.644,10.031,10.031,0,0,1,3.353,17Zm11.252,4.644A19.676,19.676,0,0,0,17.426,17h3.221A10.031,10.031,0,0,1,14.605,21.644ZM21.539,15H18.1a12.016,12.016,0,0,0,.4-3,12.016,12.016,0,0,0-.4-3h3.437a9.992,9.992,0,0,1,0,6Z"
              />
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
              <span class="text-xs text-white mb-1">Desde la</span>
              <span class="title-font text-white font-medium">Web App</span>
            </span>
          </button>
          <button
            class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-6 h-6"
              viewBox="0 0 512 512"
            >
              <path
                d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"
              ></path>
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
              <span class="text-xs text-gray-600 mb-1">Pronto en</span>
              <span class="title-font font-medium">Google Play</span>
            </span>
          </button>
          <button
            class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="w-6 h-6"
              viewBox="0 0 305 305"
            >
              <path
                d="M40.74 112.12c-25.79 44.74-9.4 112.65 19.12 153.82C74.09 286.52 88.5 305 108.24 305c.37 0 .74 0 1.13-.02 9.27-.37 15.97-3.23 22.45-5.99 7.27-3.1 14.8-6.3 26.6-6.3 11.22 0 18.39 3.1 25.31 6.1 6.83 2.95 13.87 6 24.26 5.81 22.23-.41 35.88-20.35 47.92-37.94a168.18 168.18 0 0021-43l.09-.28a2.5 2.5 0 00-1.33-3.06l-.18-.08c-3.92-1.6-38.26-16.84-38.62-58.36-.34-33.74 25.76-51.6 31-54.84l.24-.15a2.5 2.5 0 00.7-3.51c-18-26.37-45.62-30.34-56.73-30.82a50.04 50.04 0 00-4.95-.24c-13.06 0-25.56 4.93-35.61 8.9-6.94 2.73-12.93 5.09-17.06 5.09-4.64 0-10.67-2.4-17.65-5.16-9.33-3.7-19.9-7.9-31.1-7.9l-.79.01c-26.03.38-50.62 15.27-64.18 38.86z"
              ></path>
              <path
                d="M212.1 0c-15.76.64-34.67 10.35-45.97 23.58-9.6 11.13-19 29.68-16.52 48.38a2.5 2.5 0 002.29 2.17c1.06.08 2.15.12 3.23.12 15.41 0 32.04-8.52 43.4-22.25 11.94-14.5 17.99-33.1 16.16-49.77A2.52 2.52 0 00212.1 0z"
              ></path>
            </svg>
            <span class="ml-4 flex items-start flex-col leading-none">
              <span class="text-xs text-gray-600 mb-1">Pronto en</span>
              <span class="title-font font-medium">App Store</span>
            </span>
          </button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img
          class="object-cover object-center rounded max-sm:hidden"
          alt="hero"
          src="/fiber-pricing.webp"
        />
      </div>
    </div>
  </section>
</template>

<style scoped>
img {
  z-index: 5;
}
</style>
