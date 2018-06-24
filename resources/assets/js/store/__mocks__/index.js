import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const getters = {
    currentUsers: jest.fn().mockReturnValue([
        {
            id: 1,
            name: 'Foo',
            apples: [{id: 1, name: 'Apple'}],
        },
        {
            id: 1,
            name: 'Bar',
            apples: [{id: 2, name: 'Apple'}],
        },
    ]),
    currentBasket: jest.fn().mockReturnValue([
        'Apple',
        'Apple',
        'Apple',
        'Apple',
    ]),
};

export const mutations = {
    setUsers: jest.fn(),
    updateUser: jest.fn(),
    setBasket: jest.fn(),
};

export const actions = {
    getUsers: jest.fn(),
    getBasket: jest.fn(),
    freeApples: jest.fn(),
    takeApple: jest.fn(),
};

export const state = {
    users: [],
    basket: []
};

// eslint-disable-next-line no-underscore-dangle
export function __createMocks(custom = { getters: {}, mutations: {}, actions: {}, state: {} }) {
    const mockGetters = Object.assign({}, getters, custom.getters);
    const mockMutations = Object.assign({}, mutations, custom.mutations);
    const mockActions = Object.assign({}, actions, custom.actions);
    const mockState = Object.assign({}, state, custom.state);

    return {
        getters: mockGetters,
        mutations: mockMutations,
        actions: mockActions,
        state: mockState,
        store: new Vuex.Store({
            getters: mockGetters,
            mutations: mockMutations,
            actions: mockActions,
            state: mockState,
        }),
    };
}

export const store = __createMocks().store;