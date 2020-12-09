/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
import Vue from "vue";
import { BootstrapVue } from "bootstrap-vue";
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import 'vuetify/dist/vuetify.min.css'
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'

import vuetify from './plugins/vuetify'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//Base Component
Vue.component('base-footer', require('./portal/components/partials/BaseFooter.vue').default);
Vue.component('vue-table', require('./portal/components/partials/Table.vue').default);
Vue.component('vue-modal', require('./portal/components/partials/Modal.vue').default);
//Vuetify

// End of Base Component

//UI

//End of UI

// Plugin
Vue.use(BootstrapVue);

//End of Plugin
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
    vuetify,
    iconfont: 'mdi'
  }).$mount('#app')

