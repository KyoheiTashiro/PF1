import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);


import Home from './components/pages/Home.vue'
import Login from './components/pages/Login.vue'
import SignUp from './components/pages/SignUp.vue'
import Schedule from './components/pages/Schedule.vue'
import Course from './components/pages/Course.vue'
import Fsw from './components/pages/Fsw.vue'
import Tc from './components/pages/Tc.vue'
import Mtg from './components/pages/Mtg.vue'
import Mylist from './components/pages/Mylist.vue'
import SearchResults from './components/pages/SearchResults.vue'
import Event from './components/pages/Event.vue'

const routes = [
  {
  path: '/home',
  name: 'home',
  component: Home
}  ,{
  path: '/login',
  name: 'login',
  component: Login
}, {
  path: '/signup',
  name: 'signup',
  component: SignUp
}, {
  path: '/schedule',
  name: 'schedule',
  component: Schedule

}, {
  path: '/course',
  name: 'course',
  component: Course
}, {
  path: '/fsw',
  name: 'fsw',
  component: Fsw
}, {
  path: '/tc',
  name: 'tc',
  component: Tc
}, {
  path: '/mtg',
  name: 'mtg',
  component: Mtg
}, {
  path: '/mylist',
  name: 'mylist',
  component: Mylist
}, {
  path: '/search-results',
  name: 'search-results',
  component: SearchResults
}, {
  path: '/event',
  name: 'event',
  component: Event
  }
]


export default new VueRouter({
  mode:'history',
  routes
});