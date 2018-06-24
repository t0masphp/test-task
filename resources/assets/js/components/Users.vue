<template>
    <div>
        <h3>Users</h3>
        <ul class="list-group">
            <li class="list-group-item" v-for="user of users" :key="user.id">
                <span>{{user.name}} has {{user.apples.length}} apples</span>
                <a class="btn btn-xs btn-danger pull-right grab-apple"
                   @click="$emit('takeApple', user.id)">
                    Grab apple
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'Users',
        props: ['users'],
    }
</script>

<style scoped>

</style>
