<template>
    <div class="demo-alert-box">
        <strong>Ошибка!</strong>
        <div>{{error}}</div>
    </div>
</template>

<script>
    export default {
        name: "AlertBox",
        props:['error']
    }
</script>

<style scoped>

</style>