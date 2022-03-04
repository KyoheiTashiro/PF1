import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './components/pages/Home.vue';
import Login from './components/pages/Login.vue';
import SignUp from './components/pages/SignUp.vue';
// import Fsw from './components/pages/Fsw.vue';
// import Tc from './components/pages/Tc.vue';
// import Mtg from './components/pages/Mtg.vue';
// import Mihama from './components/pages/Mihama.vue';
import Mylist from './components/pages/Mylist.vue';
import SearchEventComponent from './components/pages/SearchEventComponent.vue';
import Event from './components/pages/Event.vue';
// import ThisMonthEvent from './components/pages/ThisMonthEvent.vue';
// import NextMonthEvent from './components/pages/NextMonthEvent.vue';

import CourseEventComponent from './components/component/CourseEventComponent.vue';
import MonthEventComponent from './components/component/MonthEventComponent.vue';

const routes = [
  {
    path: '/events/course/:course_name',
    name: 'CourseEventComponent',
    component: CourseEventComponent,
  },
  {
    path: '/events/month/:month',
    name: 'MonthEventComponent',
    component: MonthEventComponent,
  },
  {
    path: '/events/search',
    name: 'SearchEventComponent',
    component: SearchEventComponent,
  },
  {
    path: '/home',
    name: 'home',
    component: Home,
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
  },
  {
    path: '/signup',
    name: 'signup',
    component: SignUp,
  },
  {
    path: '/events',
    name: 'event',
    component: Event,
  },
  // {
  //   path: '/events/fsw',
  //   name: 'fsw',
  //   component: Fsw,
  // },
  // {
  //   path: '/events/tc',
  //   name: 'tc',
  //   component: Tc,
  // },
  // {
  //   path: '/events/mtg',
  //   name: 'mtg',
  //   component: Mtg,
  // },
  // {
  //   path: '/events/mihama',
  //   name: 'mihama',
  //   component: Mihama,
  // },
  {
    path: '/mylist',
    name: 'mylist',
    component: Mylist,
  },
  // {
  //   path: '/event/this_month',
  //   name: 'ThisMonthEvent',
  //   component: ThisMonthEvent,
  // },
  // {
  //   path: '/event/next_month',
  //   name: 'NextMonthEvent',
  //   component: NextMonthEvent,
  // },
];

export default new VueRouter({
  mode: 'history',
  routes,
});
