import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'main',
      component: () => import('../views/main/index.vue')
    },
    {
      path: '/products',
      name: 'products.index',
      component: () => import('../views/main/product/index.vue')
    },
    {
      path: '/products/:id',
      name: 'products.show',
      component: () => import('../views/main/product/Show.vue')
    },
    {
      path: '/cart',
      name: 'cart.index',
      component: () => import('../views/cart/Index.vue')
    },
    {
      path: '/wishlist',
      name: 'wishlist.index',
      component: () => import('../views/wishlist/Index.vue')
    },
    {
      path: '/registration',
      name: 'registration.index',
      component: () => import('../views/users/Registration.vue')
    },
    {
      path: '/account',
      name: 'account.index',
      component: () => import('../views/users/MyAccount.vue')
    },
    {
      path: '/admin',
      name: 'admin.index',
    },
    {
      path: '/compare',
      name: 'compare.index',
      component: () => import('../views/compare/Index.vue')
    }
    ,
    {
      path: '/notification',
      name: 'successOrder.index',
      component: () => import('../views/notification/SuccessOrder.vue')
    },
    {
      path: '/login',
      name: 'login.index',
      component:() =>import('../views/users/Login.vue')
    },
      {
       path: '/recorder',
       name: 'recorder.index',
       component: () => import('../views/main/videoRecorder/Index.vue')
      },
      {
       path: '/recorder/:id',
       name: 'recorder.show',
       component: () => import('../views/main/videoRecorder/Show.vue')
      },
      ,
      {
          path: '/hdd/:id',
          name: 'hdd.show',
          component: () => import('../views/main/hdd/Show.vue')
      },
      ,
      {
          path: '/hdd',
          name: 'hdd.index',
          component: () => import('../views/main/hdd/Index.vue')
      },
      ,
      {
          path: '/pppoe',
          name: 'pppoe.index',
          component: () => import('../views/main/pppoe/Index.vue')
      },
      {
          path: '/pppoe/:id',
          name: 'pppoe.show',
          component: () => import('../views/main/pppoe/Show.vue')
      },
      {
          path: '/service/:id',
          name: 'service.show',
          component: () => import('../views/main/service/Show.vue')
      },
      {
          path: '/service',
          name: 'service.index',
          component: () => import('../views/main/service/Index.vue')
      },
      {
          path: '/cable',
          name: 'cable.index',
          component: () => import('../views/main/cable/Index.vue')
      },
      {
          path: '/cable/:id',
          name: 'cable.show',
          component: () => import('../views/main/cable/Show.vue')
      },
      {
          path: '/intercom/:id',
          name: 'intercom.show',
          component: () => import('../views/main/intercom/Show.vue')
      },
      {
          path: '/intercom',
          name: 'intercom.index',
          component: () => import('../views/main/intercom/Index.vue')
      },
      {
          path: '/smeta',
          name: 'show.index',
          component: () => import('../views/cart/Show.vue')
      },
  ]
})
router.beforeEach((to,from,next)=>{
    const token = localStorage.getItem('userData')

    if(!token){
        if(to.name === 'login.index'|| to.name === 'registration.index'){
            return next()
        } else{
            return next({
                name:'login.index'
            })
        }
    }
    if(to.name === 'login.index'|| to.name === 'registration.index' && token){
        return next({
            name:'account'
        })
    }
    next()
})


export default router
