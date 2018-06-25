import axios from 'axios'

export default {
    getUsers({commit}) {
        axios.get('users').then(response => commit('setUsers', response.data))
            .catch(reason => window.events.$emit('flash', reason, 'danger'));
    },
    getBasket({commit}) {
        axios.get('basket').then(response => commit('setBasket', response.data))
            .catch(reason => window.events.$emit('flash', reason, 'danger'));
    },
    freeApples({dispatch}) {
        axios.get('apples/free').then(_ => {
            dispatch('getUsers');
            dispatch('getBasket');
        }).catch(reason => window.events.$emit('flash', reason, 'danger'));
    },
    takeApple({dispatch, commit}, id) {
        axios.get(`users/${id}/grab`, id).then(response => {
            const success = response.data.success;
            if (success) {
                commit('updateUser', response.data.user);
                dispatch('getBasket');
            } else {
                window.events.$emit('flash', response.data.message, 'danger');
            }
        });
    }
};
