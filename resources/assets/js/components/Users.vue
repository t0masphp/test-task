<template>
    <div>
        <h3>Users</h3>
        <ul class="list-group">
            <li class="list-group-item" v-for="user of users" :key="user.id">
                <span>{{user.name}} has {{user.apples.length}} apples</span>
                <a class="btn btn-xs btn-danger pull-right" @click="takeApple(user.id)">Grab apple</a>
            </li>
        </ul>
    </div>
</template>

<script>
    import {mapActions, mapGetters} from 'vuex'

    export default {
        name: 'Users',
        computed: mapGetters({
            users: 'currentUsers'
        }),
        methods: mapActions({
            takeApple: function (dispatch, id) {
                dispatch('takeApple', id);
            }
        })
    }
</script>

<style scoped>

</style>
