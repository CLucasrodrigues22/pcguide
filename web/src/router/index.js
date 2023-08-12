import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'IndexView',
      component: () => import('../views/Index.vue')
    },
    {
      path: '/store',
      name: 'LojaView',
      component: () => import('../views/Loja.vue')
    },
    {
      path: '/blog',
      name: 'BlogView',
      component: () => import('../views/Blog.vue')
    },
    {
      path: '/contact',
      name: 'ContatoView',
      component: () => import('../views/Contato.vue')
    },
    {
      path: '/about',
      name: 'SobreView',
      component: () => import('../views/SobreNos.vue')
    }
  ]
})

export default router
