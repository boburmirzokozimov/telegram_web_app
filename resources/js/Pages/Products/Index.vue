<script setup>

import Paginator from "@/Components/Paginator.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

defineProps({
    products: Object
})

</script>

<template>
    <div class="grid grid-cols-1 gap-y-5">
        <div v-for="product in products.data" class="relative">
            <div class="tg-theme-text-color  btn_add ">
                <PrimaryButton style="transform: translateX(-100%)">
                    <i class="fa fa-plus"></i>
                </PrimaryButton>
            </div>
            <div>
                <div class="relative">
                    <img :alt="product.name" :src="product.photo" class="h-full rounded">
                </div>
                <div class="flex justify-between">
                    <div class="tg-theme-text-color" v-text="product.name"></div>
                    <div class="tg-theme-text-color" v-text="`${product.price}$`"></div>
                </div>
            </div>
        </div>
    </div>
    <Paginator :products="products"/>
</template>

<style lang="scss" scoped>
.btn_add {
    @apply absolute right-0 z-10;
    transform: translateX(100%);
}
</style>
