
import Vue from 'vue';
import {createRouter,createWebHashHistory} from 'vue-router';
import Home from '../views/Home.vue';
import Themes from "../views/themes.vue";
import quest from "../views/Quest.vue"
import Newquest from "../views/new_quest.vue"
import login from "../views/login.vue"

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/',
    name: 'Themes',
    component: Themes
  },
  {
    path: '/',
    name: 'Quest',
    component: quest
  },
  {
    path: '/',
    name: 'Newquest',
    component: Newquest
  },
  {
    path: '/',
    name: 'Login',
    component: login
  }

];

const router = createRouter({
  history: createWebHashHistory(),
  base: process.env.BASE_URL,
  routes
});

export default router