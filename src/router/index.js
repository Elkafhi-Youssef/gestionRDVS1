import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '@/views/AboutView.vue'
import LoginAdmin from '@/views/admin/LoginAdmin.vue'
import ListTickets from '@/views/admin/ListTickets.vue'
import AdminHome from '@/views/admin/AdminHome.vue'
import Logout from '@/views/admin/Logout.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
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
    path: '/about',
    name: 'about',
    component: AboutView
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
  }

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
