require('./bootstrap');
window.Vue = require('vue');
import store from './store';

let App = require('./containers/App.vue');
Vue.component('users', require('./components/Users.vue'));
Vue.component('basket', require('./components/Basket.vue'));
Vue.component('alert-box', require('./components/AlertBox.vue'));
window.events = new Vue();

new Vue({
    el: '#app',
    store,
    render: h => h(App)
});