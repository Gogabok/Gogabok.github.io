import Vue from 'vue'
import store from './store.js'
import Router from 'vue-router'
import main from './views/main.vue'
import mainPage from './views/main-secondary.vue'
import mainPageCategory from './views/main-page-category.vue'
import organization from './views/organization.vue'
import registration from './views/registration.vue'
import plan from './views/plan.vue'
import text from './views/text.vue'
import favourites from './views/favourites.vue'
import addOrg from './views/addOrg.vue'
import freelancer from './views/freelancer.vue'
import edit from './views/edit.vue'
import profile from './views/profile.vue'
import archive from './views/archive.vue'

Vue.use(Router)

export const router = new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'main',
      component: main
    },
    {
      path: '/main-page',
      name: 'main-page',
      component: mainPage
    },
    {
      path: '/main-page-category',
      name: 'main-page-poest',
      component: mainPageCategory
    },
    {
      path: '/organization',
      name: 'organization',
      component: organization
    },
    {
      path: '/registration',
      name: 'registration',
      component: registration
    },
    {
      path: '/our-plan',
      name: 'plan',
      component: plan
    },
    {
      path: '/text',
      name: 'text',
      component: text
    },
    {
      path: '/favourites',
      name: 'favourites',
      component: favourites
    },
    {
      path: '/add-org',
      name: 'addOrg',
      component: addOrg
    },
    {
      path: '/add-freelancer',
      name: 'freelancer',
      component: freelancer
    },
    {
      path: '/edit',
      name: 'edit',
      component: edit
    },
    {
      path: '/profile',
      name: 'profile',
      component: profile
    },
    {
      path: '/archive',
      name: 'archive',
      component: archive
    }
  ]
})

router.beforeEach((to, from, next) => {
  store.state.isMenuVissible = false
  next()
})

export default router
