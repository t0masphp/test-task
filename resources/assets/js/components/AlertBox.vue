<template>
    <transition name="fade">
        <div class='alert alert-flash'
             :class="'alert-' + type"
             role='alert'
             v-if='show'
             v-text="messageBody">
        </div>
    </transition>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }

    .fade-enter, .fade-leave-to {
        opacity: 0
    }
</style>

<script>
    export default {
        name: 'AlertBox',
        data() {
            return {
                messageBody: '',
                show: false,
                type: ''
            }
        },
        created() {
            window.events.$on('flash', (messageBody, type) => {
                this.messageBody = messageBody;
                this.type = type;
                this.show = true;
                setTimeout(() => {
                    this.show = false;
                }, 10000)
            });
        },
    }
</script>