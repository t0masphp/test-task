<template>
    <a class="btn btn-lg btn-success text-center" @click="freeAllApples">Free Apples</a>
</template>

<script>
export default {
  name: 'ClearButton',
    methods: {
        freeAllApples: function () {
            axios.get('apples/free').then((response) => this.isLoading = false);

        }
    }
}
</script>

<style scoped>

</style>
