/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
import 'es6-promise/auto'
import axios from 'axios'
import VueAuth from '@websanova/vue-auth'
import VueAxios from 'vue-axios'
// import Auth from './Auth'
import Vuex from 'vuex';
import VeeValidate from 'vee-validate'
import VueLazyload from 'vue-lazyload'
import SweetModal from 'sweet-modal-vue/src/plugin.js'
import { Form, HasError, AlertError } from 'vform'
import router from '../../public/router'
import storeData from '../../public/store.js'
import VueJWT from 'vuejs-jwt'
import { DropdownPlugin } from 'bootstrap-vue'
import { NavbarPlugin } from 'bootstrap-vue'
// import { BootstrapVue, IconsPlugin } from 'bootstrap-vue' 
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'
// import './custom.scss'


Vue.use(NavbarPlugin)
Vue.use(DropdownPlugin)
Vue.use(VueJWT)
Vue.use(Vuex);
Vue.use(VueAxios, axios)
Vue.router = router
Vue.use(VueAuth, {
    auth: require('@websanova/vue-auth/drivers/auth/bearer'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x'),
})

axios.defaults.baseURL = `http://atatawebsite.test/api`
Vue.use(VueLazyload)
Vue.use(SweetModal)
Vue.use(VueRouter)
    // Vue.use(BootstrapVue)
    // Vue.use(IconsPlugin)


// const routes = [
//     { path: '/dashboard', component: require('./components/SupplierDashboard.vue') }
// ]

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
// const routes = [
//     { path: '/ExampleComponent', component: require('./components/ExampleComponent.vue') },
//     { path: '/SupplierDashboard', component: require('./components/SupplierDashboard.vue') },
// ]
// const router = new VueRouter({
//         routes: [{
//             path: '/Supplier/Dashboard',
//             name: 'Dashboard',
//             component: require('./components/ExampleComponent.vue')
//         }]
//     })
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component('App', require('./components/index.vue').default);
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const store = new Vuex.Store(storeData);


const app = new Vue({
    el: '#vueapp',
    router,
    store,
})