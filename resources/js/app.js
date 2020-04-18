/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.EventBus = new Vue();

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/HeaderComponent.vue -> <example-component></example-component>
 */
Vue.use(ElementUI);


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('footer-component', require('./components/subComponents/FooterComponent').default);
Vue.component('list-component', require('./components/ListComponent.vue').default);
Vue.component('homepage-component', require('./components/HomePageComponent.vue').default);
Vue.component('post-form-component', require('./components/subComponents/PostFormComponent.vue').default);
Vue.component('latest-posts-component', require('./components/subComponents/LatestPostsComponent.vue').default);
Vue.component('post-component', require('./components/PostComponent.vue').default);
Vue.component('homepage-categories-component', require('./components/subComponents/HomePageCategories').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
