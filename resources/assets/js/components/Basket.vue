<template>
    <div>
        <h3>Basket</h3>
        <ul class="list-group basket">
            <li class="list-group-item" v-for="item in basket">
                <span>{{item}}</span>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'Basket',
        props: ['basket']
    }
</script>

<style scoped>

</style>
