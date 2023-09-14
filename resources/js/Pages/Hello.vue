<script setup>

import {onMounted} from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const tg = window.Telegram.WebApp

const handleClose = () => {
    tg.close()
}
onMounted(() => {
    tg.ready()
})
</script>

<template>
    <PrimaryButton @click="handleClose">Close</PrimaryButton>

    <div class="text-center py-4 text-white bg-black">Hello</div>
</template>

<style lang="scss" scoped>

</style>
