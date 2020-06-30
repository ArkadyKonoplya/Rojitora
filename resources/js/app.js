import 'es6-promise/auto'
import axios from 'axios'
import BootstrapVue from 'bootstrap-vue'

import Vue from 'vue'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'
// import Index from './components/IndexComponent'
import auth from './auth'
import router from './router'
import VeeValidate from "vee-validate";

// statement for optimal bundle sizes
import { BModal, VBModal } from 'bootstrap-vue'
//Set session
import VueSession from 'vue-session'
Vue.use(VueSession)
    //inculde Jquery
window.$ = require('jquery')
window.JQuery = require('jquery')
    // Set Vue globally
window.Vue = Vue
Vue.use(VeeValidate)
    // Set Vue router
Vue.router = router
Vue.use(VueRouter)
    //Set Bootstrap
Vue.use(BootstrapVue)
    // Set Vue authentication
Vue.use(VueAxios, axios)
axios.defaults.baseURL = `https://test1.playthriftgift.com/api`
Vue.use(VueAuth, auth)
    // Load Index
    // Vue.component('index', Index)
    //Bootstrap Component,Directive
Vue.component('b-modal', BModal)
    // Note that Vue automatically prefixes directive names with `v-`
Vue.directive('b-modal', VBModal)

const app = new Vue({
    el: '#app',
    router
});