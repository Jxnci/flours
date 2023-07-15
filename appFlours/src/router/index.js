import {createRouter, createWebhistory} from 'vue-router'
import Login from '../views/Login.vue'
import HelloWorld from '../components/HelloWorld.vue'

const routes =[
  {
    path: '/',
    name: '/home',
    component: HelloWorld
  },
  {
    path: '/login',
    name: 'login',
    component: Login
  }
]

const router = createRouter({
  history:createWebhistory(process.env.BASE_URL),
  routes
})

