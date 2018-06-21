export default {
    getUsers({commit}) {
        axios.get('users').then(response => {
            commit('setUsers', response.data)
        });
    },
    getBasket({commit}) {
        axios.get('basket').then(response => {
            commit('setBasket', response.data)
        });
    },
    freeApples({dispatch}) {
        axios.get('apples/free').then(response => {
            dispatch('getUsers');
            dispatch('getBasket');
        });
    },
    takeApple({dispatch, commit}, id) {
        axios.get(`users/${id}/grab`, id).then(response => {
            const success = response.data.success;
            if (success) {
                dispatch('getUsers');
                dispatch('getBasket');
            } else {
                window.events.$emit('flash', response.data.message, 'danger');
            }
        });
    }
};
