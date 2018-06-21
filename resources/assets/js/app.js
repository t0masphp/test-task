require('./bootstrap');
window.Vue = require('vue');

Vue.component('users', require('./components/Users.vue'));
Vue.component('clear-button', require('./components/ClearButton.vue'));
Vue.component('basket', require('./components/Basket.vue'));
Vue.component('alert-box', require('./components/AlertBox.vue'));

new Vue({
    data: {
        users: [],
        basket: [],
        isLoading: true,
        error: null,
        baseUrl: document.head.querySelector('meta[name="base-url"]')
    },
    el: '#app',
    created() {
        this.getUsers();
        this.getBuckets();
    },
    methods: {
        getBuckets: function () {
            axios.get('basket').then((response) => {
                this.isLoading = false;
                this.items = response.data;
            });
        },
        getUsers: function () {
            axios.get('users').then((response) => {
                this.users = response.data;
                this.isLoading = false;
            });
        },
    }
});
