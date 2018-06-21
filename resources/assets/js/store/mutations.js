export const STORAGE_KEY = 'todos-vuejs'

// for testing
if (navigator.userAgent.indexOf('PhantomJS') > -1) {
    window.localStorage.clear()
}

export const mutations = {
    setUsers(state, users) {
        state.users = users;
    },
    setBasket(state, basket) {
        state.basket = basket;
    },
    flash(state, message) {
        state.error = message;
    }
}
