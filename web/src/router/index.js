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
      path: '/sobre',
      name: 'SobreView',
      component: () => import('../views/SobreNos.vue')
    },
    {
      path: '/loja',
      name: 'LojaView',
      component: () => import('../views/Loja.vue')
    },
    {
      path: '/blog',
      name: 'BlogView',
      component: () => import('../views/Blog.vue')
    },
    {
      path: '/contato',
      name: 'ContatoView',
      component: () => import('../views/Contato.vue')
    }
  ]
})

export default router
