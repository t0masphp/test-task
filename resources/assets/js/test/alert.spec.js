import {mount} from '@vue/test-utils'
import Vue from 'vue';
import AlertBoxComponent from '../components/AlertBox.vue'

beforeEach(() => {
    window.events = new Vue();
});

afterEach(() => {
    delete window.events;
});

test('AlertBoxComponent should mount without crashing', () => {
    const wrapper = mount(AlertBoxComponent);
    expect(wrapper).toMatchSnapshot();
});

