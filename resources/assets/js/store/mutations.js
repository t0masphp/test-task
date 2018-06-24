export const mutations = {
    setUsers(state, users) {
        state.users = users;
    },
    updateUser(state, userData) {
        state.users = state.users.map((user) => userData.id === user.id ? userData : user);
    },
    setBasket(state, basket) {
        state.basket = basket;
    }
}
