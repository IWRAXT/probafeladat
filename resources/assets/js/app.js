
require('./bootstrap');

window.Vue = require('vue');


Vue.component('articles',require('./components/Articles.vue'));
Vue.component('people', require('./components/PersonComponent.vue'));



const app = new Vue({
    el: '#app'
});