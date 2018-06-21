<template>
    <div>
        <h3>Basket</h3>
        <ul class="list-group" v-if="!isLoading">
            <li class="list-group-item" v-for="item in basket" :key="index">
                <span>{{item}}</span>
            </li>
        </ul>
        <div v-if="isLoading">Loading...</div>
    </div>
</template>

<script>
    export default {
        name: 'Basket',
        props: ['basket', 'isLoading'],
    }
</script>

<style scoped>

</style>
