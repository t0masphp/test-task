require('./bootstrap');
window.Vue = require('vue');
import store from './store';

Vue.component('users', require('./components/Users.vue'));
Vue.component('clear-button', require('./components/ClearButton.vue'));
Vue.component('basket', require('./components/Basket.vue'));
Vue.component('alert-box', require('./components/AlertBox.vue'));
import actions from './store/actions'
window.events = new Vue();

new Vue({
    el: '#app',
    store
});

actions.getUsers(store);
actions.getBasket(store);
