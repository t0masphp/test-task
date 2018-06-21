import Vue from 'vue';
import Vuex from 'vuex';
import {mutations} from './mutations'
import getters from './getters'
import actions from './actions'
import plugins from './plugins'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        users: [],
        basket: []
    },
    actions,
    getters,
    mutations,
    plugins
})
