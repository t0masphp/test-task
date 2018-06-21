<template>
    <div>
        <h3>Basket</h3>
        <ul class="list-group">
            <li class="list-group-item" v-for="item in basket">
                <span>{{item}}</span>
            </li>
        </ul>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: 'Basket',
        computed: mapGetters({
            basket: 'currentBasket'
        }),
    }
</script>

<style scoped>

</style>
