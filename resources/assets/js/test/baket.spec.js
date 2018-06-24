import {mount, shallowMount} from '@vue/test-utils'
import BasketComponent from '../components/Basket.vue'

describe('BasketComponent', () => {
    it('should mount without crashing', () => {
        const wrapper = mount(BasketComponent);
        expect(wrapper).toMatchSnapshot()
    });

    it('should have correct number of records', () => {
        const basket = ['Apple', 'Apple', 'Apple', 'Apple'];
        const wrapper = shallowMount(BasketComponent, {
            propsData: {basket: basket}
        });
        expect(wrapper.findAll('li')).toHaveLength(basket.length)
    });
});
