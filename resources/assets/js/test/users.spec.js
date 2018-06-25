import {mount, shallowMount} from '@vue/test-utils'
import UsersComponent from '../components/Users.vue'
describe('UsersComponent', () => {
    it('UsersComponent should mount without crashing', () => {
        const wrapper = mount(UsersComponent);
        expect(wrapper).toMatchSnapshot();
    });


    it('UsersComponent should mount without crashing', () => {
        const users = [{id: 1, name: 'Test - 1', apples: []}];
        const wrapper = shallowMount(UsersComponent, {
            propsData: {users: users}
        });
        expect(wrapper.findAll('li')).toHaveLength(users.length)
    });


});