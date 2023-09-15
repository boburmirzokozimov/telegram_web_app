<script setup>

import {onMounted} from "vue";

const tg = window.Telegram.WebApp

const handleClose = () => {
    tg.close()
}
onMounted(() => {
    tg.ready()
})
</script>

<template>
    <div class="text-center py-4 tg-theme-text-color">Welcome back,{{ tg.initDataUnsafe?.user?.username }}</div>
</template>

<style lang="scss" scoped>

</style>
