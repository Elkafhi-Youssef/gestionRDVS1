import { createRouter, createWebHistory } from 'vue-router'


import LoginAdmin from '@/views/admin/LoginAdmin.vue'
import ListTickets from '@/views/admin/ListTickets.vue'
import AdminHome from '@/views/admin/AdminHome.vue'
import Logout from '@/views/admin/Logout.vue'
import Login from '@/views/Reference.vue'
import Signup from '@/views/Signup.vue'
import Rendv from "@/views/Rdvs.vue";
import Reservation from '@/views/reservation.vue'

const routes = [
  
  {
    path: '/logout',
    name: 'logout',
    component: Logout
  },
  {
    path: '/adminhome',
    name: 'adminhome',
    component: AdminHome,
  },
  {
    path:'/loginadmin',
    name: 'loginadmin',
    component: LoginAdmin
  },
  {
    path: '/listtickets',
    name: 'listtickets',
    component: ListTickets
  },
  {
    path: "/rdv/:ref",
    name: "RendezVous",
    component: Rendv,
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
  },
  {
    path: '/',
    name: 'Signup',
    component: Signup,
  },

  {
    path: '/reservation',
    name: 'Reservation',
    component: Reservation,
  },
  {
    path: "/reservation/:ref",
    name: "Reservation",
    component: Reservation,
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
