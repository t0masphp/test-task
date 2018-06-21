<template>
    <a class="btn btn-lg btn-success text-center" @click="freeAllApples">Free Apples</a>
</template>

<script>
    import {mapActions} from 'vuex'

    export default {
        name: 'ClearButton',
        methods: mapActions({
            freeAllApples: function (dispatch) {
                dispatch('freeApples');
            }
        })
    }
</script>

<style scoped>

</style>
