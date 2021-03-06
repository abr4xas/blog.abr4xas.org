
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Ads from 'vue-google-adsense'

Vue.use(require('vue-script2'))

Vue.use(Ads.Adsense)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('categories', require('./components/Categories/CategoriesComponent.vue'));
Vue.component('spinner', require('vue-spinner-component/src/Spinner.vue'));

Vue.component('pagination', require('./components/pagination/PaginationComponent.vue'));

Vue.component('home', require('./components/amp/home/HomeComponent.vue'));

const app = new Vue({
    el: '#app'
});
