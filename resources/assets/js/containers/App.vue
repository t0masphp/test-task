<template>
    <div class="container">
        <div class="col-md-12">
            <alert-box/>
        </div>
        <div class="col-md-6">
            <div class="col-12">
                <users :users="users"
                       v-on:takeApple="takeApple"/>
            </div>
            <div class="col-12">
                <a class="btn btn-lg btn-success text-center free-apples"
                   @click="freeAllApples">Free Apples</a>
            </div>
        </div>
        <div class="col-md-6">
            <basket :basket="basket"/>
        </div>
    </div>
</template>

<script>
    import {mapActions, mapGetters} from 'vuex'
    import actions from '../store/actions'

    export default {
        name: "App",
        computed: mapGetters({
            users: 'currentUsers',
            basket: 'currentBasket'
        }),
        created: function() {
            actions.getUsers(this.$store);
            actions.getBasket(this.$store);
        },
        methods: mapActions({
            takeApple: (dispatch, id) => dispatch('takeApple', id),
            freeAllApples: (dispatch) => dispatch('freeApples')
        })
    }
</script>

<style scoped>

</style>