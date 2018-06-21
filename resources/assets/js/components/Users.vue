<template>
    <div>
        <h3>Users</h3>
        <ul v-if="!isLoading" class="list-group">
            <li class="list-group-item" v-for="user of users" :key="user.id">
                <span>{{user.name}} has {{user.apples.length}} apples</span>
                <a class="btn btn-xs btn-danger pull-right"  @click="takeApple(user.id)">Grab apple</a>
            </li>
        </ul>
        <div v-if="isLoading">Loading...</div>
    </div>
</template>

<script>
    export default {
        name: 'Users',
        props: ['users'],
        methods: {
            takeApple: function (id) {
                axios.get(`users/${id}/grab`).then((response) => {
                    this.isLoading = false;
                    const success = response.data.success;
                    const updatedUser = response.data.user;
                    if (success) {
                        this.users = this.users.map((user) => {
                            if (user.id === updatedUser.id) {
                                user.apples = updatedUser.apples;
                            }
                        });
                    } else {
                        alert(response.data.message);
                    }
                });
            }
        }
    }
</script>

<style scoped>

</style>
