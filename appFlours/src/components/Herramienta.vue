<template>
  <div class="area">
    <section class="text-gray-600 body-font pt-6">
      <div class="container px-5 py-24 mx-auto">
        <div class="mx-auto">
          <h1
            class="text-white uppercase text-center font-bold leading-tight text-[1rem] sm:text-1xl xl:text-2xl"
          >
            Grandes ventajas
          </h1>
          <p
            class="text-gray-400 font-bold leading-tight capitalize text-center"
          >
            En el uso de la aplicacion
          </p>
        </div>
        <div class="w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
          <img
            alt="feature"
            class="object-cover object-center w-full"
            src="../../public/dashboard.avif"
          />
        </div>
        <div
          class="flex justify-evenly max-md:flex-col lg:py-6 -mb-10 "
        >
          <div class="flex flex-col mb-10 items-center">
            <div
              class=" p-5 inline-flex items-center justify-center rounded-full bg-gray-300 text-indigo-800 mb-5"
            >
              <img src="/public/protection.png" alt="" class="w-20" srcset="" />
            </div>
            <div class="flex-grow">
              <h2
                class="text-white text-center text-lg title-font font-medium mb-3"
              >
                100% Seguro
              </h2>
            </div>
          </div>
          <div class="flex flex-col mb-10 items-center">
            <div
              class=" p-5 inline-flex items-center justify-center rounded-full bg-gray-300 text-indigo-500 mb-5"
            >
              <img src="/public/cloud.png" alt="" class="w-20" srcset="" />
            </div>
            <div class="flex-grow">
              <h2
                class="text-white text-center text-lg title-font font-medium mb-3"
              >
                Tecnologia Cloud
              </h2>
            </div>
          </div>
          <div class="flex flex-col mb-10 items-center">
            <div
              class=" p-5 inline-flex items-center justify-center rounded-full bg-gray-300 text-indigo-500 mb-5"
            >
              <img src="/public/report.png" alt="" class="w-20" srcset="" />
            </div>
            <div class="flex-grow">
              <h2
                class="text-white text-center text-lg title-font font-medium mb-3"
              >
                Reportes en tiempo real
              </h2>
            </div>
          </div>
          <div class="flex flex-col mb-10 items-center">
            <div
              class=" p-5 inline-flex items-center justify-center rounded-full bg-gray-300 text-indigo-500 mb-5"
            >
              <img src="/public/happiness.png" alt="" class="w-20" srcset="" />
            </div>
            <div class="flex-grow">
              <h2
                class="text-white text-center text-lg title-font font-medium mb-3"
              >
                Facil de usar
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</template>

<style scoped>
.area {
  background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
  width: 100%;
}

.circles {
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.circles li {
  position: absolute;
  display: block;
  list-style: none;
  width: 20px;
  height: 20px;
  background: rgba(122, 171, 187, 0.2);
  animation: animate 25s linear infinite;
  bottom: -150px;
}

.circles li:nth-child(1) {
  left: 25%;
  width: 80px;
  height: 80px;
  animation-delay: 0s;
}

.circles li:nth-child(2) {
  left: 10%;
  width: 20px;
  height: 20px;
  animation-delay: 2s;
  animation-duration: 12s;
}

.circles li:nth-child(3) {
  left: 70%;
  width: 20px;
  height: 20px;
  animation-delay: 4s;
}

.circles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  animation-delay: 0s;
  animation-duration: 18s;
}

.circles li:nth-child(5) {
  left: 65%;
  width: 20px;
  height: 20px;
  animation-delay: 0s;
}

.circles li:nth-child(6) {
  left: 75%;
  width: 110px;
  height: 110px;
  animation-delay: 3s;
}

.circles li:nth-child(7) {
  left: 35%;
  width: 150px;
  height: 150px;
  animation-delay: 7s;
}

.circles li:nth-child(8) {
  left: 50%;
  width: 25px;
  height: 25px;
  animation-delay: 15s;
  animation-duration: 45s;
}

.circles li:nth-child(9) {
  left: 20%;
  width: 15px;
  height: 15px;
  animation-delay: 2s;
  animation-duration: 35s;
}

.circles li:nth-child(10) {
  left: 85%;
  width: 150px;
  height: 150px;
  animation-delay: 0s;
  animation-duration: 11s;
}

@keyframes animate {
  0% {
    transform: translateY(0) rotate(0deg);
    opacity: 1;
    border-radius: 0;
  }

  100% {
    transform: translateY(-1000px) rotate(720deg);
    opacity: 0;
    border-radius: 50%;
  }
}
</style>
